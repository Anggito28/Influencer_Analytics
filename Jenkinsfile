pipeline {
  environment {
    PATH = "$PATH:/usr/bin/docker-compose"
    
  }
  
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Build.... \n'
        sh "ls -lisa"
       
      }
    }
    stage('Test') {
      steps {
        echo 'Running Test.. \n'
      }
    }
    
    stage('Deploy') {
      
      steps {
        
        echo 'Success.. \n'
        
      }
    }
  }
}
