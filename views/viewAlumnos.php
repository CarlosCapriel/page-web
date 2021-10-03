<?php ?>
<button class="btn waves-effect waves-light btn-large btn-floating green" type="submit" name="action">
<a href="?menu=insertalumnoview"><i class="material-icons">add</i></a>
</button>
<table class="striped ">
    <thead class ="black white-text">
        <tr>
            <th>Id</th>
            <th>Alumno</th>
            <th>Nombre</th>
            <th>Sexo</th>
            <th>Genero</th>
            <td>Acciones</td>
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
            <?php }
            ?>
        </td>
        <td>
           <button class="btn waves-effect waves-light red" type="submit" name="action">
              <a href="?menu=deletealumno&idalumno=<?php echo $alumnoview->id; ?>"
              <i class="material-icons right white-text">delete</i></a>
           </button>                    
           <button class="btn waves-effect waves-light" type="submit" name="action">
               <a href="?menu=editalumno&idalumno=<?php echo $alumnoview->id; ?>">
               <i class="material-icons right white-text">edit</i></a>
           </button>
           <?php }?>                    
        </td>
    </tbody>
</table>
