// Helper function
const getFormElements = () => {
  const allFields = Array.prototype.slice.call(document.getElementById('myform').elements)
    return allFields.filter(ele => ele.type !== 'button')
}

// Object with main functionality
function MyForm () {
  this.formElements = getFormElements()
  this.submitButton = document.getElementById('submitButton')
  this.form = document.getElementById('myform')

  this.checkFormOnSubmit = () => {
    this.submitButton.addEventListener('click', () => {
      let errors = 0
      this.formElements.forEach(ele => {
        if(!ele.checkValidity()) {
          errors++
          ele.classList.add('error')
        } else {
          ele.classList.remove('error')
        }
      })
      if(errors === 0) this.submitForm()
    })
  }

  this.checkFieldsOnChange = () => {
    this.formElements.forEach(ele => ele.addEventListener('input', () => {
      if(ele.classList.contains('error')) {
        ele.classList.remove('error')
      }
    }))
  }
  this.submitForm = () => {
    this.form.submit()
  }
}

// Wait for the onload callback to fire before execute your code
window.onload = () => {
  const myForm = new MyForm()
  myForm.checkFormOnSubmit()
  myForm.checkFieldsOnChange()
}