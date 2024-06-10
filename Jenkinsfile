pipeline {
  agent any
  stages {
    stage ('Checkout') {
      steps {
        git url: 'https://github.com/pgnaik/PHP_Docker.git', branch: 'main'
      }
    }
    stage ('Run Docker Compose') {
      steps {
        script {
          def dockerComposeCommand = 'docker-compose up -d'
          if (isUnix()) {
            sh dockerComposeCommand
          } else {
            bat dockerComposeCommand
          }
        }
      }
    }
  }
}
