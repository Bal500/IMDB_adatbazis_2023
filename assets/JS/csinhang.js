const audio = new Audio('./assets/audio/csinhang.mp3');
const buttons = document.querySelectorAll('#chinbtn');

buttons.forEach(button => {
    button.addEventListener('click', () => {
    audio.play();
    });
});