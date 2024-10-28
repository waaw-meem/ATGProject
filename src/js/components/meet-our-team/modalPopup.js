export default function modalPopup() {
    const cards = document.querySelectorAll('.card');
    const cancelButtons = document.querySelectorAll('.modal__cancel');
    const backdrop = document.querySelector('.modal-backdrop');

    function showModal(id) {
        const modal = document.getElementById(id);
        if (modal) {
            modal.classList.add('show');
            backdrop.classList.add('show');
            document.documentElement.style.overflow = 'hidden';
        } else {
            console.error(`Modal with ID ${id} not found.`);
        }
    }

    function hideModals() {
        const modals = document.querySelectorAll('.modal');
        modals.forEach(modal => modal.classList.remove('show'));
        backdrop.classList.remove('show');
        document.documentElement.style.overflow = '';
    }

    if (cards.length > 0) {
        cards.forEach(card => {
            card.addEventListener('click', () => {
                const modalId = card.getAttribute('data-modal');
                showModal(modalId);
            });
        });
    }

    if (cancelButtons.length > 0) {
        cancelButtons.forEach(button => {
            button.addEventListener('click', hideModals);
        });
    }

    if (backdrop) {
        backdrop.addEventListener('click', hideModals);
    } else {
        console.error('Backdrop element not found.');
    }
}
