# Blog API
## Endpoints

- *GET*
  - Get all posts: `http://localhost/blog-api/posts`
  - Get limited posts: `http://localhost/blog-api/posts/{nuber-of-posts}`
  - Get post by id: `http://localhost/blog-api/post/{id}`
- *POST*
  - Create new post: `http://localhost/blog-api/post`
- *PUT*
  - Update post: `http://localhost/blog-api/post/{id}`
- *DELETE*
  - Delete post: `http://localhost/blog-api/post/{id}`

## Examples
### 1. Get all posts
```js
{
    fetch('http://localhost/blog-api/posts')
    .then(res => res.json())
    .then(data => console.log(data));
}
```
#### Output:
```json
{
    "data": [
        {
            "id": 1,
            "0": 1,
            "title": "What is event loop in JS",
            "1": "What is event loop in JS",
            "body": "It is Event loop",
            "2": "It is Event loop"
        },
        {
            "id": 2,
            "0": 2,
            "title": "How to install something",
            "1": "How to install something",
            "body": "You just need to install it first then...",
            "2": "You just need to install it first then..."
        },
        {
            "id": 3,
            "0": 3,
            "title": "How to survive",
            "1": "How to survive",
            "body": "What are zombies afraid of?\r\nZombies are afraid of fire, so you will definitely want some fireworks ",
            "2": "What are zombies afraid of?\r\nZombies are afraid of fire, so you will definitely want some fireworks "
        },
        {
            "id": 4,
            "0": 4,
            "title": "Different ways to stop smoking",
            "1": "Different ways to stop smoking",
            "body": "Discover Smoking Hotline Number. Find Quick Results from Multiple Sources. Get Smoking Hotline Numbe",
            "2": "Discover Smoking Hotline Number. Find Quick Results from Multiple Sources. Get Smoking Hotline Numbe"
        },
        {
            "id": 6,
            "0": 6,
            "title": "1914 translation by H. Rackham\n",
            "1": "1914 translation by H. Rackham\n",
            "body": "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was bo",
            "2": "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was bo"
        },
        {
            "id": 16,
            "0": 16,
            "title": "Test",
            "1": "Test",
            "body": "This is good enough ",
            "2": "This is good enough "
        },
        ....
        ......
    ]
}
```

### 2. Get the first 3 posts
```js
{
    fetch('http://localhost/blog-api/posts/3')
    .then(res => res.json())
    .then(data => console.log(data));
}
```

#### Output:
```json
{
    "data": [
        {
            "id": 1,
            "0": 1,
            "title": "What is event loop in JS",
            "1": "What is event loop in JS",
            "body": "It is Event loop",
            "2": "It is Event loop"
        },
        {
            "id": 2,
            "0": 2,
            "title": "How to install something",
            "1": "How to install something",
            "body": "You just need to install it first then...",
            "2": "You just need to install it first then..."
        },
        {
            "id": 3,
            "0": 3,
            "title": "How to survive",
            "1": "How to survive",
            "body": "What are zombies afraid of?\r\nZombies are afraid of fire, so you will definitely want some fireworks ",
            "2": "What are zombies afraid of?\r\nZombies are afraid of fire, so you will definitely want some fireworks "
        }
    ]
}
```

### 2. Get post by id
```js
{
    fetch('http://localhost/blog-api/post/2')
    .then(res => res.json())
    .then(data => console.log(data));
}
```

```json
{
    "data": [
        {
            "id": 2,
            "0": 2,
            "title": "How to install something",
            "1": "How to install something",
            "body": "You just need to install it first then...",
            "2": "You just need to install it first then..."
        }
    ]
}
```

