const signUp = document.getElementById('signUp');
const signIp = document.getElementById('signIn');
const overlaySign = document.getElementById('overlay-sign');

signUp.addEventListener('click', () => {
    signUp.classList.add("right-panel-active")
})

signIp.addEventListener('click', () => {
    signIp.classList.add("left-panel-active")
})