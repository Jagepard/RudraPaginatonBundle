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
