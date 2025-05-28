const openButtons = document.querySelectorAll('open-modal');

openButtons.forEach(nutton => {
    openButtons.addEvenLister('click',() => {
        const modalId = button.getAttribute('data-modal');
        const modal = document.getElementById(modalID);

        modal.showModal();
    });
});

const closeButtons = document.querySelectorAll('.close-modal');

closeButtons.forEach(button => {
    button.addEventListener('click', () =>{

    });
});