class Alerta {

    constructor() {
        this.toast = Swal.mixin({
            toast: true,
            position: 'center',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
              toast.addEventListener('mouseenter', Swal.stopTimer)
              toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
          })
    }
    
    
    mensajeError ( { title, text } ) {
        Swal.fire({
            title,
            text,
            icon: 'error',
            confirmButtonText: 'Cerrar'
          })
    }

    mensajeCorrecto ( { title, text } ) {
        Swal.fire({
            title,
            text,
            icon: 'success',
            confirmButtonText: 'Cerrar'
          })
    }

    mensajeEliminarConfirmacion( {title, text, callbackSucces = null, callBackError = null } ){
        Swal.fire({
            title,
            text,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar!'
          }).then((result) => {
            if (result.isConfirmed) {
                if( callbackSucces && typeof callbackSucces == 'function' ) {
                    callBackError()
                }
            } else {
                if( callBackError && typeof callBackError == 'function' ) {
                    callBackError()
                }
            }
          })
    }

    mensajeCorrectoToast( {  icon, title } ) {
        this.toast.fire({
            icon,
            title
          })
    }

}