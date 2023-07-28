<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Ecommerce API
<p>
This api was created for practical purposes, such as projects so you can learn some technology or simply for your next project and integrate it into your portfolio.
This API will have more functionalities as time advances.
Is open to support or collaboration.
</p>

## Products
### Get all products

```http
https://store.innovacode.online/api/products
```

### Get product by id
```http
https://store.innovacode.online/api/products/id
```

### Get product by slug
```http
https://store.innovacode.online/api/products/slug
```


### Search products
```http
https://store.innovacode.online/api/products?search=query
```


## Category

### Get all categories
```https
https://store.innovacode.online/api/categories
```

### Get categorie by id
```https
https://store.innovacode.online/api/id
```

### Get category by slug
```https
https://store.innovacode.online/api/slug
```

## Images
All the images are already pre-formatted so that they do not weigh so much on the web and you can concentrate on your project 😃.
All are with a measure of 858x858

In the json responses we can find an array of images with id and a url, example: 
```
/storage/products/iphone-14-pro-max-2.webp
```

To complete the url of the image you must insert the base domain, example:
```
https://store.innovacode.online/storage/products/iphone-14-pro-max-2.webp
```