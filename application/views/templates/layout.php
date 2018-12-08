<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Admin</title>
        <?php $this->load->view("templates/css"); ?>
    </head>
    <body class="sidebar-mini wysihtml5-supported skin-blue-light">
        <div class="wrapper">
            <?php $this->load->view("templates/header"); ?>
            <?php $this->load->view("templates/sidebar"); ?>
            <?php $this->load->view("templates/main"); ?>
            <?php $this->load->view("templates/footer"); ?>
        </div>
        <?php $this->load->view("templates/script"); ?>
    </body>
</html>
