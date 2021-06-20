const signUp = document.getElementById('signUp');
const signIn = document.getElementById('signIn');
const content = document.getElementById('content');

signUp.addEventListener('click', () => {
    content.classList.add("right-panel-active");
});

signIn.addEventListener('click', () => {
    content.classList.remove("right-panel-active");
});