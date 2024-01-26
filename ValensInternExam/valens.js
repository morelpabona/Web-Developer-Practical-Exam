function updateColor2() {
    let selectElement = document.querySelector('.mySelect2');
    let selectedOption = selectElement.value;
    let displayCarElement = document.querySelector('.displayCar2');

        if (selectedOption === 'option2') {
        displayCarElement.innerHTML = '<img src="./img/rightred.jpg" alt="Red Car">';
        } else if (selectedOption === 'option3') {
        displayCarElement.innerHTML = '<img src="./img/rightgreen.jpg" alt="Green Car">';
        } else if (selectedOption === 'option4') {
        displayCarElement.innerHTML = '<img src="./img/rightblue.jpg" alt="Blue Car">';
        } else if (selectedOption === 'option1') {
        displayCarElement.innerHTML = '<img src="./img/default.jpg" alt="default">';
        }
}

function updateColor1() {
    let selectElement = document.querySelector('.mySelect');
    let selectedOption = selectElement.value;
    let displayCarElement = document.querySelector('.displayCar');

        if (selectedOption === 'option2') {
        displayCarElement.innerHTML = '<img src="./img/rightred.jpg" alt="Red Car">';
        } else if (selectedOption === 'option3') {
        displayCarElement.innerHTML = '<img src="./img/rightgreen.jpg" alt="Green Car">';
        } else if (selectedOption === 'option4') {
        displayCarElement.innerHTML = '<img src="./img/rightblue.jpg" alt="Blue Car">';
        } else if (selectedOption === 'option1') {
        displayCarElement.innerHTML = '<img src="./img/default.jpg" alt="default">';
        }
}