class CustomSelect {
    constructor(elementId, options = {}) {
        this.selectElement = document.getElementById(elementId);
        this.selectBox = this.selectElement.querySelector('.select-box');
        this.selectedElement = this.selectElement.querySelector('.selected');
        this.optionsContainer = this.selectElement.querySelector('.options-container');
        this.options = this.selectElement.querySelectorAll('.option');
        this.onChangeCallback = options.onChange || function() {};

        this._init();
    }

    _init() {
        // Toggle the options container when clicking on the select box
        this.selectBox.addEventListener('click', (event) => {
            event.stopPropagation(); // Prevent event from bubbling up
            this.toggleOptions();
        });

        // Add event listeners to options
        this.options.forEach(option => {
            option.addEventListener('click', (event) => {
                event.stopPropagation(); // Prevent event from bubbling up
                this.selectOption(option);
            });
        });

        // Close the options container if clicking outside
        document.addEventListener('click', () => {
            this.closeOptions();
        });
    }

    toggleOptions() {
        this.optionsContainer.classList.toggle('show');
    }

    closeOptions() {
        this.optionsContainer.classList.remove('show');
    }

    selectOption(option) {
        const selectedValue = option.getAttribute('data-value');
        const selectedText = option.textContent;

        this.selectedElement.textContent = selectedText;
        this.selectedElement.setAttribute('data-value', selectedValue);
        this.closeOptions();

        // Trigger the onChange callback
        this.onChangeCallback(selectedValue, selectedText);
    }
}
