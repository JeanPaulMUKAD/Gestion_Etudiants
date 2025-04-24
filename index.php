<!--=====session_start=====-->
<?php session_start(); ?>
<?php
$db = new SQLite3('db.sqlite');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = $_POST['nom'];
    $promotion = $_POST['promotion'];
    $email = $_POST['email'];

    $stmt = $db->prepare("INSERT INTO etudiants (nom, promotion, email) VALUES (:nom, :promotion, :email)");
    $stmt->bindValue(':nom', $nom);
    $stmt->bindValue(':promotion', $promotion);
    $stmt->bindValue(':email', $email);
    $stmt->execute();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription Étudiant</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md space-y-6">
        <h2 class="text-3xl font-bold text-center text-gray-800">Inscription Étudiant</h2>
        <!--=====Afficher le message de succès après insertion=====-->
        <?php if (isset($_SESSION['success'])): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Etudiant Enregistré avec succès!</strong>
                <span class="block sm:inline"><?php echo $_SESSION['success']; ?></span>
            </div>
            <?php unset($_SESSION['success']); ?>
        <?php endif; ?>
        <!--=====Afficher le message d'erreur en cas d'échec=====-->
        <?php if (isset($_SESSION['error'])): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                <strong class="font-bold">Erreur!</strong>
                <span class="block sm:inline"><?php echo $_SESSION['error']; ?></span>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        
        <div>
            <label class="block text-sm font-medium text-gray-700">Nom</label>
            <input name="nom" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div></div>
            <label class="block text-sm font-medium text-gray-700">Promotion</label>
            <input name="promotion" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" required class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-lg hover:bg-blue-700 transition duration-300">
            Enregistrer
        </button>
    </form>
</body>
</html>
</html>
