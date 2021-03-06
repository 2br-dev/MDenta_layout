let vertexShader = `
attribute float size;
varying vec3 vColor;
uniform float morphTargetInfluences[4];
uniform float scale;

void main() {
    vColor = color;
    vec3 pos = position + normal * scale;
    vec4 mvPosition = modelViewMatrix * vec4( position, 1.0 );
    gl_PointSize = size * ( 300.0 / -mvPosition.z );
    gl_Position = projectionMatrix * mvPosition;
}`;

let fragmentShader = `
uniform sampler2D pointTexture;
varying vec3 vColor;

void main() {
    gl_FragColor = vec4( vColor, 1.0 );
    gl_FragColor = gl_FragColor * texture2D( pointTexture, gl_PointCoord );
}`

let shaders = {
    vShader: vertexShader,
    fShader: fragmentShader
}

export default shaders;