<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="updatedelete.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
  <tr>
    <td><?php
        echo "$name"
        ?></td>
        <td><?php
        echo "$age"
        ?></td>
        <td><?php
        echo "$crime"
        ?></td>
        <td><?php
        echo "$gender"
        ?></td>
        <td><?php
        echo "$location"
        ?></td>
        <td><?php
        echo "$convicted"
        ?></td>
        <td>
        <button type="button">
            <a href="/crms/update.php?name=<?php
        echo "$name"
        ?>">UPDATE</a></button>
        
        
        <button type="button"><a href="/crms/delete.php?name=<?php
        echo "$name"
        ?>">DELETE</a></button></td>


  </tr>
