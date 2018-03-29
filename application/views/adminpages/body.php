<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active"><?php echo($headerTitle); ?></li>
      </ol>
      <div class="row">
        <div class="col-12">
          <form>
            <input type="submit" name="addNews" value="Add">
          </form>

          <table border="1">
            <th style="background-color: black; color: white;">ID</th>
            <th style="background-color: black; color: white;">Title</th>
            <th style="background-color: black; color: white;">Type</th>
            <th style="background-color: black; color: white;">Description</th>
            <th style="background-color: black; color: white;">Actions</th>
            <?php foreach($news_list as $news): ?>
              <tr>
                <td><?php echo ($news['id']);?></td>
                <td><?php echo ($news['title']);?></td>
                <td><?php echo ($news['type']);?></td>
                <td><?php echo ($news['newsDescription']);?></td>
                <td> <a href="#">Details</a> <a href="#">Update</a> <a href="#">Delete</a> </td>
              </tr>
            <?php endforeach; ?>
          </table>

          <div>
            <?php echo $this->pagination->create_links(); ?>
          </div>
          
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    
</body>