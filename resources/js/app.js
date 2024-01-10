import './bootstrap';
import TomSelect from '../../node_modules/tom-select/dist/esm/tom-select.complete.js';
import '../../node_modules/feather-icons/dist/feather.min.js';

if(document.getElementsByClassName('tom-select').length > 0) {
    new TomSelect('.tom-select', {});
}

// Styling for alternating tables
for(const tbody of document.querySelectorAll('table.table-alternate-color tbody')) {
    const trs = tbody.children;
    for(let i = 0; i < trs.length; i+=2) {
        trs[i].style.backgroundColor = '#f2f2f2';
    }
}

for(const toReplace of document.querySelectorAll('i[data-feather]')) {
    const width = toReplace.getAttribute('width') ?? '16px';
    const height = toReplace.getAttribute('height') ?? '16px';
    const icon = toReplace.getAttribute('data-feather');

    toReplace.parentElement.innerHTML += feather.icons[icon].toSvg({
        width: width,
        height: height
    });

    toReplace.remove();
}
