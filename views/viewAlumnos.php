<?php ?>
<table class="striped ">
    <thead class ="black white-text">
        <tr>
            <th>Id</th>
            <th>Alumno</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Genero</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($sqlAlumnos as $alumnoview) {
        ?>
        <tr>
        <td><?php echo $alumnoview->id; ?></td>
        <td><?php echo $alumnoview->alumno; ?></td>
        <td><?php echo $alumnoview->nombre; ?></td>
        <td><?php echo $alumnoview->sexo; ?></td>
        <td>
            <?php if ($alumnoview->sexo == 'M') { ?>
            <i class = "material-icons prefix blue-text">male</i>
            <?php } else {
            ?>
            <i class = "material-icons prefix red-text">female</i>
            <?php }}
            ?>
        </td>
    </tbody>
</table>