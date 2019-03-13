<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <h1>Task for the day</h1>
    
    <ul>
      
       <li>
         <strong>Name: </strong> <?= $task['title']; ?>
      </li>
         <li>
         <strong>Due date: </strong> <?= $task['due']; ?>
      </li>
      <li>
         <strong>Person responsible: </strong> <?= $task['assigned_to']; ?>
      </li>
      <li>
         <strong>Status: </strong> 
         <?php if ($task['completed']) : ?>
    
        <span class="icon">&#9989;</span>
        
         <?php else : ?>
        <span clas="icon">Incomplete</span>
        <?php endif; ?>
      </li>
      <li>
         <strong>Needs Revision: </strong> 
         <?php if (! $task['needs_revision']) : ?>
    
        <span class="icon">No &#9786;</span>
        
         <?php else : ?>
        <span clas="icon">Yes &#9873;</span>
        <?php endif; ?>
      </li>
    
    </ul>

  </body>
</html>