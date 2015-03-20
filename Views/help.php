<?php ?>
<h1> Вспомогалки</h1>

<table class="doctable table">
   <caption><strong>Сравнение типов <var class="varname"><var class="varname">$x</var></var> и результатов функций PHP, связанных с типами</strong></caption>
   
    <thead>
     <tr>
      <th>Выражение</th>
      <th><span class="function"><a href="function.gettype.php" class="function">gettype()</a></span></th>
      <th><span class="function"><a href="function.empty.php" class="function">empty()</a></span></th>
      <th><span class="function"><a href="function.is-null.php" class="function">is_null()</a></span></th>
      <th><span class="function"><a href="function.isset.php" class="function">isset()</a></span></th>
      <th><span class="type"><a href="language.types.boolean.php" class="type boolean">boolean</a></span> : <em>if($x)</em></th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td><em>$x = &quot;&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = null;</em></td>
      <td><span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>var $x;</em></td>
      <td><span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><var class="varname"><var class="varname">$x</var></var> неопределена</td>
      <td><span class="type"><a href="language.types.null.php" class="type NULL">NULL</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = array();</em></td>
      <td><span class="type"><a href="language.types.array.php" class="type array">array</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = false;</em></td>
      <td><span class="type"><a href="language.types.boolean.php" class="type boolean">boolean</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = true;</em></td>
      <td><span class="type"><a href="language.types.boolean.php" class="type boolean">boolean</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = 1;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = 42;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = 0;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = -1;</em></td>
      <td><span class="type"><a href="language.types.integer.php" class="type integer">integer</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = &quot;1&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = &quot;0&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = &quot;-1&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = &quot;php&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = &quot;true&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

     <tr>
      <td><em>$x = &quot;false&quot;;</em></td>
      <td><span class="type"><a href="language.types.string.php" class="type string">string</a></span></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>FALSE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
      <td><strong><code>TRUE</code></strong></td>
     </tr>

    </tbody>
   
  </table>