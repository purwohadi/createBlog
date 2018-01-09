BLOG BOOTSRAP

Questions:
1. How to secure form submission?
first of all , php source code can't be viewed unless you restrict access to it via htaccess or other ways , secondly , your front-end source code must always be public because security issues aren't treated from the front to the back-end , thirdly , your php file's source can't be viewed like a css file or javascript code
if you want to restrict direct HTTP access to form.php , you could use .htaccess or you can use  SSL-secure

2. How would you optimize a website's assets/resources?
you can do this following techniques :
- Name the assets.
- Use a content delivery network.
- Host assets on different domains but reduce dns lookups.
- Place assets on a cookie-free domain and split the assets among domains.
- Use CSS Sprites.
- Disable etags.

4. What UI, Security, Performance, SEO, Maintainability or Technology considerations
do you make while building a web application or site?
- UI: I like minimal UI which contains only what it should. I believe it results in the better user experience, as a user knows what to do intuitively.

- Security: I always try to make both frontend and backend secure, concerning CSRF, XSS, etc.
Performance: I consider space and time complexity for the algorithms and logics I use and write.

- SEO: Set meta tags for search engines and consider and consider server-side rendering for SPA.

- Maintainability: Try to keep the source code consistent and make objects immutable. Use statically typed languages such as TypeScript. Use CI with tests and lints.

- Technology: I like to learn new technologies, but if the project is in production, I would consider using technologies which is well-documented and widely used.


5. What do you know about design pattern?
Accourding to wikipedia (https://en.wikipedia.org/wiki/Software_design_pattern) design patern is reusable solution to a commonly occurring problem within a given context in software design.

6. What are HTTP methods? List all HTTP methods that you know, and explain them.
HTTP defines a set of request methods to indicate the desired action to be performed for a given resource. 
List of HTTP Method : 
- POST => submits data to be processed (e.g., from an HTML form) to the identified resource

- GET => requests a representation of the specified resource

PUT => The PUT method replaces all current representations of the target resource with the request payload.

- PATCH => used to apply partial modifications to a resource

- DELETE => deletes the specified resource.

7. Database: What is the difference between a View and a Table?
views are definitions built on top of other tables (or views), and do not hold data themselves

8. What's Two Factor Authentication? How would you implement it in an existing web
application?
2FA is an extra layer of security that is known as "multi factor authentication" that requires not only a password and username but also something that only, and only, that user has on them. In implment in existing web can used token
