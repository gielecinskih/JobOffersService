let el = document.getElementById('tilt')

const height = 289;
const width = 316;

el.addEventListener('mousemove', handleMove);

function handleMove(e) {
    const xVal = e.layerX
    const yVal = e.layerY
    const yRotation = 20 * ((xVal - width / 2) / width)
    const xRotation = -20 * ((yVal - height / 2) / height)
    const string = 'perspective(500px) scale(1.1) rotateX(' + xRotation + 'deg) rotateY(' + yRotation + 'deg)'
    el.style.transform = string
}

el.addEventListener('mouseout', function() {
    el.style.transform = 'perspective(500px) scale(1) rotateX(0) rotateY(0)'
})