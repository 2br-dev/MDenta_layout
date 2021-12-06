<?php

	ini_set('display_errors', 1);
	error_reporting(E_ALL);
	

	class Sender{

		public $name = "";
		public $phone="";
		public $comments = "";
		public $time = "";
		public $orderId="";
		private $addresser = "masterkadaj@gmail.com";
		public $type;
		private $request;
		private $modx;

		// Конструктор
		public function __construct( $type = 'get' ){

			// Установка типа запроса
			$this->type = $type;

			switch ( $this->type ){
				case 'get': $this->request = $_GET; break;
				case 'post': $this->request = $_POST; break;
			}

			// Проверяем поля
			$checkResult = $this->check();
			if( $checkResult['success'] == false ){
				die( json_encode( $checkResult, JSON_UNESCAPED_UNICODE ) );
			}

			// Подключаем API
			$this->connectApi();

			// Подготавливаем шаблоны
			$tpl = $this->initTemplate();

			// Отправляем письмо
			if( $tpl ){
				$this->send( $tpl );
			}
		}

		// Экранирование спецсимволов
		private function ecran( $field ){
			if( !empty( $field ) ){
				return addslashes( htmlspecialchars( $field ) );
			}else{
				return null;
			}
		}

		// Проверка полей
		private function check(){
			
			$this->name = isset( $this->request['name'] ) ? $this->ecran( $this->request['name'] ) : null;
			$this->comments = isset( $this->request['comments'] ) ? $this->ecran( $this->request['comments'] ) : null;
			$this->phone = isset( $this->request['phone'] ) ? $this->ecran( $this->request['phone'] ) : null;
			$this->formId = isset( $this->request['formId'] ) ? $this->ecran( $this->request['formId'] ) : null;
			$this->time = isset( $this->request['time'] ) ? $this->ecran( $this->request['time'] ) : null;


			// Не указан ID формы
			if( empty( $this->formId )){
				return array(
					'message' => 'Не указана форма',
					'success' => false,
					'code' => 2
				);
			}

			// Не заполнены поля
			switch( $this->formId ){
				case( "request-order" ):
					if( 
						empty( $this->name ) 		||
						empty( $this->phone ) 		||
						empty( $this->comments )
					){
						return array(
							'message' => 'Не заполнены обязательные поля',
							'success' => false,
							'code' => 3
						);
					}
					break;
				case ( "request-call" ):
					if(
						empty( $this->name )	||
						empty( $this->phone )	||
						empty( $this->time )
					){
						return  array(
							'message' => 'Не заполнены обязательные поля',
							'success' => false,
							'code' => 3
						);
					};
					break;
				default:

					// ID формы не совпадает ни с одним известным
					return array(
						'message' => 'Неопределённая форма',
						'success' => false,
						'code' => 1
					); break;
					
			}

			return(array(
				'message' => 'Проверка успешно пройдена',
				'success' => true,
				'code' => 0
			));
		}

		// Подключение API
		private function connectApi(){
			define('MODX_API_MODE', true);
			require_once($_SERVER['DOCUMENT_ROOT'] . '/index.php');
			$this->modx = new modX();
			$this->modx->initialize('mgr');
		}

		// Инициализация шаблона
		private function initTemplate(){

			$params	 = null;
			$modx	 = $this->modx;

			if( isset( $modx ) ){

				$date = new DateTime();
				setlocale(LC_ALL, 'ru_RU.UTF-8');
				$now = $this->ru_date( strftime('%d %B %Y', time() ) );

				switch( $this->formId ){
					case "request-order":
						$params = array(
							'name' 		=> $this->name,
							'phone' 	=> $this->phone,
							'comments'	=> $this->comments,
							'now' 		=> $now
						);
						break;
					case "request-call":
						$params = array(
							'name' 		=> $this->name,
							'phone' 	=> $this->phone,
							'time'		=> $this->time,
							'now' 		=> $now
						);
						break;
					default:
						return false;
				}

				return $this->modx->getChunk( $this->formId, $params );
			} else {
				return false;
			}
		}

		// Форматирование даты
		function ru_date( $date ) {
			$monthes1 = ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
			$monthes2 = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];

			for ( $i = 0; $i < 12; $i++ ){
				$date = str_replace( $monthes1[ $i ], $monthes2[ $i ], $date );
			}

			return $date;

		}

		// Отправка
		private function send( $message ){

			// Инициализация службы
			$modx = $this->modx;
			$modx->getService('mail', 'mail.modPHPMailer');
			$modx->mail->set(modMail::MAIL_BODY, $message);
			$modx->mail->set(modMail::MAIL_FROM, $modx->config['fromMail']);
			$modx->mail->set(modMail::MAIL_FROM_NAME, $modx->config['fromName']);
			$modx->mail->address('to', $this->addresser);
			$modx->mail->setHTML(true);	

			// Отправка сообщения
			if(!$modx->mail->send()){
				$message = "При отправки сообщения возникли ошибки";
				$code = 1;
				$modx->log(modX::LOG_LEVEL_ERROR, "Ошибка отправки сообщения: " . $modx->mail->mailer->ErrorInfo);
			}else{
				$code = 0;
				$message = "Сообщение успешно отправлено!";
			}

			// Сброс mailer'а
			$modx->mail->reset();

			// Вывод результата
			$result = array(
			    'code' => $code,
			    'message' => $message
			);

			echo json_encode($result, JSON_UNESCAPED_UNICODE);
		}
	}

	$sender = new Sender( 'post' );

?>