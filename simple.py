from locust import HttpLocust, TaskSet, task

class AppTasks(TaskSet):
    @task
    def index(self):
        self.client.get("/gentle/elephant")
        
class ApiTask(HttpLocust):
    task_set = AppTasks
    min_wait = 5000
    max_wait = 15000
