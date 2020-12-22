<?php if (!empty($this->session->flashdata('success'))) { ?>
        <script>
            const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 8000
            }); 
            Toast.fire({
            type: 'success',
            title: '<?php echo $this->session->flashdata("success");?>'
            })
        </script>
    <?php } ?>

    <?php if (!empty($this->session->flashdata('error'))) { ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 8000
            }); 
            Toast.fire({
                type: 'error',
                title: '<?php echo $this->session->flashdata("error");?>'
            })
        </script>
    <?php } ?>
    

    <?php if (!empty($this->session->flashdata('info'))) { ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 8000
            }); 
            Toast.fire({
                type: 'info',
                title: '<?php echo $this->session->flashdata("info");?>'
            })
        </script>
    <?php } ?>

    <?php if (!empty($this->session->flashdata('warning'))) { ?>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 8000
            }); 
            Toast.fire({
                type: 'warning',
                title: '<?php echo $this->session->flashdata("warning");?>'
            })
        </script>
    <?php } ?>