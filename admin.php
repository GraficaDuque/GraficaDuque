<?php
include("conexao.php");

// Buscar todos os contatos
$sql = "SELECT * FROM contatos ORDER BY data_envio DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Painel Administrativo - Contatos</title>
  <link rel="stylesheet" href="style.css">
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 2rem;
    }
    th, td {
      border: 1px solid #ddd;
      padding: 0.75rem;
      text-align: left;
    }
    th {
      background: #2563eb;
      color: #fff;
    }
    tr:nth-child(even) {
      background: #f9f9f9;
    }
  </style>
</head>
<body>
  <section class="max-w-7xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">📋 Lista de Contatos</h1>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Telefone</th>
          <th>Mensagem</th>
          <th>Tipo</th>
          <th>Data</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($result->num_rows > 0): ?>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= $row['id'] ?></td>
              <td><?= htmlspecialchars($row['nome']) ?></td>
              <td><?= htmlspecialchars($row['email']) ?></td>
              <td><?= htmlspecialchars($row['telefone']) ?></td>
              <td><?= htmlspecialchars($row['mensagem']) ?></td>
              <td><?= htmlspecialchars($row['tipo']) ?></td>
              <td><?= $row['data_envio'] ?></td>
            </tr>
          <?php endwhile; ?>
        <?php else: ?>
          <tr><td colspan="7">Nenhum contato encontrado.</td></tr>
        <?php endif; ?>
      </tbody>
    </table>
  </section>
</body>
</html>

<?php
$conn->close();
?>
