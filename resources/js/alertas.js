//ALERTAS SWEEAT ALERT
export function correcto(){
  Swal.fire({
    position: 'center',
    type: 'success',
    title: '¡Todo Correcto, Buen trabajo!',
    showConfirmButton: false,
    timer: 1500
  })
    };

export function error(){
    Swal.fire({
      type: 'error',
      title: 'Oops...',
      text: 'Algo Salio Mal, Lo sentimos',
    })
    };