<!-- Add the iziToast JS file to your HTML document -->
<script src="//cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"></script>

<?php
if (isset($_SESSION['message']) && $_SESSION['message'] != '') {
?>
    <script>
        iziToast.<?php echo $_SESSION['status'] ?>({
            title: '<?php echo $_SESSION['tittle'] ?>',
            message: '<?php echo $_SESSION['message'] ?>',
            position: 'topRight',
        });
    </script>
<?php
    unset($_SESSION['tittle']);
    unset($_SESSION['status']);
    unset($_SESSION['message']);
}
?>