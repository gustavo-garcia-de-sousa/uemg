const prevBtns = document.querySelectorAll(".btn-prev");
const nextBtns = document.querySelectorAll(".btn-next");
const progress = document.getElementById("progress");
const formSteps = document.querySelectorAll(".form-step");
const progressSteps = document.querySelectorAll(".progress-step");

let formStepsNum = 0;

nextBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum++;
    updateFormSteps();
    updateProgressbar();
  });
});

prevBtns.forEach((btn) => {
  btn.addEventListener("click", () => {
    formStepsNum--;
    updateFormSteps();
    updateProgressbar();
  });
});

function updateFormSteps() {
  formSteps.forEach((formStep) => {
    formStep.classList.contains("form-step-active") &&
      formStep.classList.remove("form-step-active");
  });

  formSteps[formStepsNum].classList.add("form-step-active");
}

function updateProgressbar() {
  progressSteps.forEach((progressStep, idx) => {
    if (idx < formStepsNum + 1) {
      progressStep.classList.add("progress-step-active");
    } else {
      progressStep.classList.remove("progress-step-active");
    }
  });

  const progressActive = document.querySelectorAll(".progress-step-active");

  progress.style.width =
    ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
}


/** */
const fields = document.querySelectorAll("[required]")

function ValidateField(field) {
  // logica para verificar se existem erros
  function verifyErrors() {
    let foundError = false;

    for (let error in field.validity) {
      // se não for customError
      // então verifica se tem erro
      if (field.validity[error] && !field.validity.valid) {
        foundError = error
      }
    }
    return foundError;
  }

  function customMessage(typeError) {
    const messages = {
      text: {
        valueMissing: "Por favor, preencha este campo*"
      },
      email: {
        valueMissing: "Por favor, preencha este campo*",
        typeMismatch: "Por favor, preencha este campo com um e-mail válido"
      },
      date: {
        valueMissing: "Por favor, preencha este campo*"
      },
      password: {
        valueMissing: "Por favor, preencha este campo*"
      },
      select: {
        valueMissing: "Por favor, preencha este campo*"
      }
    }

    return messages[field.type][typeError]
  }

  function setCustomMessage(message) {
    const spanError = field.parentNode.querySelector("span.error")

    if (message) {
      spanError.classList.add("active")
      spanError.innerHTML = message
    } else {
      spanError.classList.remove("active")
      spanError.innerHTML = ""
    }
  }

  return function () {

    const error = verifyErrors()

    if (error) {
      const message = customMessage(error)

      field.style.borderColor = "red"
      setCustomMessage(message)
    } else {
      field.style.borderColor = "green"
      setCustomMessage()
    }
  }
}


function customValidation(event) {

  const field = event.target
  const validation = ValidateField(field)

  validation()

}

for (field of fields) {
  field.addEventListener("invalid", event => {
    // eliminar o bubble
    event.preventDefault()

    customValidation(event)
  })
  field.addEventListener("blur", customValidation)
}


document.querySelector("form")
  .addEventListener("submit", event => {
    console.log("enviar o formulário")

    // não vai enviar o formulário
    event.preventDefault()
  })