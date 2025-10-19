<?php
$breadcrumbItems = [
    ['title' => 'Início', 'url' => '/'],
    ['title' => 'Gestão de Refeições', 'url' => null],
    ['title' => 'Agendamento', 'url' => null]
];

$breadcrumbOutput = '';
foreach ($breadcrumbItems as $index => $item) {
    if (!empty($item['url'])) {
        $breadcrumbOutput .= '<a href="' . $item['url'] . '">' . $item['title'] . '</a>';
    } else {
        $breadcrumbOutput .= $item['title'];
    }

    if ($index < count($breadcrumbItems) - 1) {
        $breadcrumbOutput .= ' / ';
    }
}
?>

<nav class="breadcrumb-custom">
    <?= $breadcrumbOutput ?>
</nav>

<style>
.breadcrumb-custom {
    font-family: Arial, sans-serif;
    font-size: 14px;
}

.breadcrumb-custom a {
    text-decoration: none;
    color: #007bff;
}
</style>


<div class="mb-3">
    <h2 class="card-title mb-0">Análise das Solicitações</h2>
    <p>Aceite ou Recuse Solicitações de Refeições</p>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <table class="table table-striped table-hover mb-4">
                    <thead class="table-dark">
                        <tr>
                            <th>Código</th>
                            <th>Turma</th>
                            <th>Data</th>
                            <th>CRC</th>
                            <th>Código da Refeição</th>
                            <th style="text-align: center; width:15%; min-width: 200px;"><strong>Ações</strong></th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>101</td>
                            <td>28/09/2025</td>
                            <td>12345</td>
                            <td>R001</td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-success btn-sm me-2">
                                        <i class="fa fa-check me-1"></i> Aceitar
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-times me-1"></i> Recusar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>