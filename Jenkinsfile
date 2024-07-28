pipeline {
    agent any 

    stages {
        stage('Checkout') {
            steps {
                // Checkout the code from version control
                git 'https://your-repo-url.git'
            }
        }

        stage('Build') {
            steps {
                script {
                    // Commands to build the project (if any)
                    // For a simple HTML project, this might be unnecessary
                    echo 'Building the project...'
                }
            }
        }

        stage('Test') {
            steps {
                script {
                    // Run any tests you have for your HTML project
                    // For example, you might use a tool like Cypress for end-to-end testing
                    echo 'Running tests...'
                    // sh 'npx cypress run' // Uncomment this line if using Cypress
                }
            }
        }

        stage('Deploy') {
            steps {
                script {
                    // Commands to deploy the project
                    // For example, you could copy the files to a web server
                    echo 'Deploying the project...'
                    // sh 'scp -r * user@your-server:/path/to/deploy' // Example deployment command
                }
            }
        }
    }

    post {
        always {
            echo 'Pipeline finished.'
        }
        success {
            echo 'Pipeline succeeded.'
        }
        failure {
            echo 'Pipeline failed.'
        }
    }
}
