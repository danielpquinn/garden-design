<link rel="stylesheet" href="/dist/admin-dashboard.css">

<div class="admin-dashboard">

  <h3>Admin Help</h3>
  <p>
    <a href="#home">Home Page</a> | 
    <a href="#gardens">Gardens</a> | 
    <a href="#garden-images">Garden Images</a> | 
    <a href="#about">About Page</a> |
    <a href="#press">Press Page</a> |
    <a href="#contact">Contact Page</a>
  </p>

  <hr>

  <h1 id="home">Home Page</h1>
  <h3>Images</h3>
  <p>To add a home page image, navigate to <strong>Page Images</strong> and select <a href="/admin/page_images/new"><strong>New page image</strong></a>. Upload a 1200x900 jpg. If your image doesn't match these dimensions, it will be cropped. After uploading your image select <strong>Home</strong> from the dropdown menu below the image and then <strong>create</strong></p>

  <hr>

  <h1 id="gardens">Gardens</h1>
  <p>To create a new garden, navigate to <strong>Gardens</strong> and select <a href="/admin/gardens/new"><strong>New garden</strong></a>.</p>
  <h3>Fields</h3>
  <table>
    <tr><td><strong>Name</strong></td><td>Appears in lower left corner of gallery layout.</td></tr>
    <tr><td><strong>Slug</strong></td><td>This will show up in the garden's url. If you enter <strong>my-garden</strong>, your url will end up looking like this: http://blissgardendesign.com/gardens/<strong>my-garden</strong></td></tr>
    <tr><td><strong>Description</strong></td><td>Text entered here will show up in the box that overlays images in the gallery.</td></tr>
    <tr><td><strong>Thumbnail</strong></td><td>This image will show up in the grid on the <strong>Gardens</strong> page. It should be a 300x300 jpg. If it doesn't match these dimensions, it will be cropped to fit the available space.</td></tr>
  </table>

  <h3 id="garden-images">Images</h3>
  <p>To add a new image to a garden's gallery view, navigate to <strong>Garden Images</strong> and select <a href="/admin/garden_images/new"><strong>New garden image</strong></a>. Upload a 1200x900 jpg. If your image doesn't match these dimensions, it will be cropped. After uploading your image select the name of the Garden that you would like to add the image to in the dropdown below. A 300x300 thumbnail will be generated for the image.</p>

  <hr>

  <h1 id="about">About</h1>
  <p>To edit content on the about page, navigate to <strong>Pages</strong> and find the existing <strong>About</strong> page. The front end of the site uses the page title to pull in information, so for the time being you will not be able to edit the <strong>Name</strong> field. Select the existing item named <strong>About</strong>, edit content as necessary, and then <strong>save</strong></p>
  <h3>Image</h3>
  <p>To edit the image on the about page, navigate to <strong>Page Images</strong> and select the existing about page image. You should now be able to select the small <strong>X</strong> button above the existing image to remove it, and then upload a new 390x695 jpg. The about page layout uses the original version of the uploaded image, so it is important that this file isn't too large.</p>

  <hr>

  <h1 id="press">Press</h1>
  <p>To create a new press item, select <strong>Press</strong> in the header and then <a href="/admin/press_items/new">New press item</a>.</p>
  <h3>Fields</h3>
  <table>
    <tr><td><strong>Name</strong></td><td>Not shown in the front end of the site yet. Used to keep track of item in admin area.</td></tr>
    <tr><td><strong>Image</strong></td><td>Appears in grid on <strong>Press</strong> page. Will be cropped to 300x300.</td></tr>
    <tr><td><strong>File</strong></td><td>File which gets downloaded when thumbnail is clicked in grid veiw. This file should not exceed 5MB.</td></tr>
  </table>

  <hr>

  <h1 id="contact">Contact</h1>
  <p>To edit content on the contact page, navigate to <strong>Pages</strong> and find the existing <strong>Contact</strong> page. The front end of the site uses the page title to pull in information, so for the time being you will not be able to edit the <strong>Name</strong> field. Select the existing item named <strong>Contact</strong>, edit content as necessary, and then <strong>save</strong></p>
  <h3>Image</h3>
  <p>To edit the image on the content page, navigate to <strong>Page Images</strong> and select the existing contact page image. You should now be able to select the small <strong>X</strong> button above the existing image to remove it, and then upload a new 390x695 jpg. The contact page layout uses the original version of the uploaded image, so it is important that this file isn't too large.</p>
</div>