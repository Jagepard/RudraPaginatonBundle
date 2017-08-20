[![SensioLabsInsight](https://insight.sensiolabs.com/projects/1815951b-a237-4eb3-ae03-89efb90f4bcb/big.png)](https://insight.sensiolabs.com/projects/1815951b-a237-4eb3-ae03-89efb90f4bcb)

# RudraPaginatonBundle

Add PaginatorBundle to your application kernel

// app/AppKernel.php
```
public function registerBundles()
{
    return array(
        // ...
        new Rudra\PaginationBundle\RudraPaginationBundle(),
        // ...
    );
}
```

Configuration example

You can configure default query parameter names and templates

```
rudra_pagination:
    per_page: 1                      # default page range used in pagination control
```
In Controller

```
$pagination = $this->get('rudra_pagination');
$pagination->init($id);
$pagination->setCount($this->getDoctrine()->getRepository(Blog::class)->numRows($conn));
$blogData = $this->getDoctrine()->getRepository(Blog::class)->getDataPerPage($conn, $pagination);

return $this->render('some/blog.html.twig', [
        ...
        'links' => $pagination->getLinks(),
        ...
    ]
);
```
