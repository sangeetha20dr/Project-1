pipeline {
    agent any 
    stages {
        stage('bulid') {
            steps {
                echo 'Building.........'
            }
        }
      stage('test') {
            steps {
                echo 'testing.........'
            }
        }  
        stage('deploy') {
            steps {
                echo 'deploying.........'
            }
        }
        stage('Checkout') {
            steps {
                // Checkout the code from version control
                git 'https://your-repo-url.git'
            }
        }
    }
} 
