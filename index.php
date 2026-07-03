<?php include 'includes/header.php'; ?>

<!-- Include Modals CSS early so it's loaded before interaction -->
<link rel="stylesheet" href="assets/css/modals.css">
<link rel="stylesheet" href="assets/css/agents.css">
<link rel="stylesheet" href="assets/css/hero.css">

<!-- Main Homepage Sections -->
<main>
    <?php include 'components/hero.php'; ?>
    <?php include 'components/services.php'; ?>
    <?php include 'components/cities.php'; ?>
    <?php include 'components/upcoming_projects.php'; ?>
    <?php include 'components/agents.php'; ?>
    <?php include 'components/property_filters.php'; ?>
</main>

<!-- Modals (Hidden by default, triggered by header Sign In) -->
<?php include 'components/modals.php'; ?>

<?php include 'includes/footer.php'; ?>