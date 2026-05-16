<?php
require_once __DIR__ . '/Database.php';

class Formation
{
    public static function getAll($niveau = '')
    {
        $pdo = Database::connect();
        if (!empty($niveau)) {
            $stmt = $pdo->prepare('SELECT * FROM formations WHERE niveau = ?');
            $stmt->execute([$niveau]);
        } else {
            $stmt = $pdo->query('SELECT * FROM formations ORDER BY id ASC');
        }
        return $stmt->fetchAll();
    }

    public static function getById($id)
    {
        $pdo = Database::connect();
        $stmt = $pdo->prepare('SELECT * FROM formations WHERE id = ?');
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}

?>
