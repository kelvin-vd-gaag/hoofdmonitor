import './bootstrap';
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Make the data function globally accessible
window.data = function data() {
    return {
        dark: false,
        toggleTheme() {
            this.light = !this.light;
        },
        isProfileMenuOpen: false,
        toggleProfileMenu() {
            this.isProfileMenuOpen = !this.isProfileMenuOpen;
        },
        closeProfileMenu() {
            this.isProfileMenuOpen = false;
        },
        // ... other functions and variables
    };
};
