<!DOCTYPE html>
<html lang="en" class="<?php echo $config['html_class']; ?>" dir="<?php echo $config['html_dir']; ?>" data-theme="<?php echo $config['data_theme']; ?>" data-assets-path="<?php echo $config['data_assets_path']; ?>" data-template="<?php echo $config['data_template']; ?>">
<head>
  <?php include '../app/includes/header.php'; ?>
</head>
<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <?php include '../app/includes/nav.php'; ?>
            <!-- Layout container -->
            <div class="layout-page">
                <?php include '../app/includes/top.php'; ?>
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            so
                        </div>
                    </div>
                    <!-- / Content -->                    
                    <?php include '../app/includes/footer.php'; ?>
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
    <?php include '../app/includes/bottom.php'; ?>
</body>
</html>