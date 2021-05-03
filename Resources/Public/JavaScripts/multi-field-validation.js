const isNil = val => val === undefined || val === null;

window.onload = init

function init() {
    const fieldsetElements = findFieldsets()
    fieldsetElements.forEach(fieldset => addInputEventListener(fieldset))
}

function findFieldsets() {
    const markerElements = [...document.querySelectorAll('.powermail_hidden')]
    return markerElements.map(el => el.closest('fieldset'))
}

function addInputEventListener(fieldset) {
    const inputElements = [...fieldset.querySelectorAll('input:not(.powermail_hidden)')];
    updateRequiredProperty(inputElements)
    inputElements.forEach(el => el.addEventListener('input', () => updateRequiredProperty(inputElements)))
}

function updateRequiredProperty(inputElements) {
    if(inputElements.map(el => el.value || undefined).some(val => !isNil(val))) {
        inputElements.forEach(el => $(el).attr('data-parsley-required', true))
    } else {
        inputElements.forEach(el => $(el).attr('data-parsley-required', false).parsley().validate())
    }
}
