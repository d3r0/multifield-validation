const isNil = (val) => val === undefined || val === null;
const unique = (arr) => [...new Set(arr)];
const queryAll = (domFilter) => [...document.querySelectorAll(domFilter)];

window.onload = init;

function init() {
  const multifieldInputEls = queryAll("[data-multifield]");
  const groups = unique(
    multifieldInputEls.map((el) => el.getAttribute("data-multifield-group"))
  );
  groups.forEach((groupKey) =>
    addInputEventListener(queryAll(`[data-multifield-group="${groupKey}"]`))
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
    inputElements.forEach((el) => $(el).attr("data-parsley-required", true));
  } else {
    inputElements.forEach((el) =>
      $(el).attr("data-parsley-required", false).parsley().validate()
    );
  }
}
