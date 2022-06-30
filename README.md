# Assignment 3 - Security

## Feature that requires access control

I made a policy called [BacklogPolicy](app/Policies/BacklogPolicy.php) here you can define if a user has access to
the route. In the [BacklogController](app/Http/Controllers/BacklogController.php) I could check if the user has access to that route

### Admin
as an admin you are restricted to some routes;
- can view the backlog
- can not edit the backlog

### Production
has access to all the routes;
- can edit the backlog
- can create the backlog
- can view the backlog


The application is hosted on [heroku](https://den-doelder-project.herokuapp.com)

