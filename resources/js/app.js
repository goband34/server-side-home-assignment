import './bootstrap';
import TomSelect from '../../node_modules/tom-select/dist/esm/tom-select.complete.js';

new TomSelect('.tom-select', {});

// Styling for alternating tables
for(const tbody of document.querySelectorAll('table.table-alternate-color tbody')) {
    const trs = tbody.children;
    for(let i = 0; i < trs.length; i+=2) {
        trs[i].style.backgroundColor = '#f2f2f2';
    }
}
