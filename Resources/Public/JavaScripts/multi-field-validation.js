const isNil = (val) => val === undefined || val === null;
const unique = (arr) => [...new Set(arr)];
const queryAll = (domFilter) => [...document.querySelectorAll(domFilter)];

window.onload = init;

function init() {
  const multifieldInputEls = queryAll(".js-multifield");
  console.debug(`MultiField: Found ${multifieldInputEls.length} fields`);
  const groups = unique(
    multifieldInputEls.map(
      (el) =>
        [...el.classList]
          .filter((elClass) => elClass.indexOf("js-multifield-group-") > -1)
          .map((elClass) => elClass.replace("js-multifield-group-", ""))[0]
    )
  );

  console.debug(`MultiField: Found ${groups.length} groups`);

  groups.forEach((groupKey) =>
    addInputEventListener(queryAll(`.js-multifield-group-${groupKey}`))
  );
}

function addInputEventListener(inputElements) {
  updateRequiredProperty(inputElements);
  inputElements.forEach((el) =>
    el.addEventListener("input", () => updateRequiredProperty(inputElements))
  );
}

function updateRequiredProperty(inputElements) {
  if (
    inputElements.map((el) => el.value || undefined).some((val) => !isNil(val))
  ) {
    inputElements.forEach((el) => (el.setAttribute('data-parsley-required', 'true')));
  } else {
    inputElements.forEach((el) => (el.removeAttribute('data-parsley-required')));
  }
}
