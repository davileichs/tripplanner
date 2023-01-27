
document.addEventListener('DOMContentLoaded', function () {

  const addCityBtn = document.getElementById('btn-addCity')
  if (addCityBtn) {
    addCityBtn.addEventListener('click', function () {
        Swal.fire({
          title: 'Submit your Github username',
          input: 'text',
          inputAttributes: {
            autocapitalize: 'off'
          },
          backdrop: `rgba(60,60,60,0.8)`,
          confirmButtonText: 'Look up',
          showCancelButton: true,
          showLoaderOnConfirm: true,
          preConfirm: (login) => {
            return fetch(`//api.github.com/users/${login}`)
              .then(response => {
                if (!response.ok) {
                  throw new Error(response.statusText)
                }
                return response.json()
              })
              .catch(error => {
                Swal.showValidationMessage(
                  `Request failed: ${error}`
                )
              })
          },
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: `${result.value.login}'s avatar`,
              imageUrl: result.value.avatar_url,
              backdrop: `rgba(60,60,60,0.8)`
            })
          }
        })
      })
  }

  const addCostBtn = document.getElementById('btn-addCost')
  if (addCostBtn) {
    addCostBtn.addEventListener('click', function () {
        Swal.fire({
          title: 'Submit your Github username',
          input: 'text',
          inputAttributes: {
            autocapitalize: 'off'
          },
          backdrop: `rgba(60,60,60,0.8)`,
          confirmButtonText: 'Look up',
          showCancelButton: true,
          showLoaderOnConfirm: true,
          preConfirm: (login) => {
            return fetch(`//api.github.com/users/${login}`)
              .then(response => {
                if (!response.ok) {
                  throw new Error(response.statusText)
                }
                return response.json()
              })
              .catch(error => {
                Swal.showValidationMessage(
                  `Request failed: ${error}`
                )
              })
          },
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: `${result.value.login}'s avatar`,
              imageUrl: result.value.avatar_url,
              backdrop: `rgba(60,60,60,0.8)`
            })
          }
        })
      })
  }

  const addDestination = document.getElementById('btn-addDestination')
  if (addDestination) {
    addDestination.addEventListener('click', function () {
        Swal.fire({
          title: 'Name',
          input: 'text',
          inputAttributes: {
            autocapitalize: 'off'
          },
          backdrop: `rgba(60,60,60,0.8)`,
          confirmButtonText: 'Save',
          showCancelButton: true,
          showLoaderOnConfirm: true,
          preConfirm: (name) => {
            return fetch(`/destinations/new/${name}`)
              .then(response => {
                if (!response.ok) {
                  throw new Error(response.statusText)
                }
                return response.json()
              })
              .catch(error => {
                Swal.showValidationMessage(
                  `Request failed: ${error}`
                )
              })
          },
          allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
          if (result.isConfirmed) {
            Swal.fire({
              title: `${result.value.login}'s avatar`,
              imageUrl: result.value.avatar_url,
              backdrop: `rgba(60,60,60,0.8)`
            })
          }
        })
      });
    }

});

