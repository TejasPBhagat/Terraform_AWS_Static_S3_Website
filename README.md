# Static Website Hosting with AWS S3 and Terraform

## Overview

This repository contains a demonstration of hosting a static website on Amazon Web Services (AWS) using an S3 bucket and managing the infrastructure using Terraform as an Infrastructure as Code (IaC) service. The project provides a simple architecture for hosting static web content like HTML, CSS, JavaScript, and images.

## Prerequisites

Before you get started, ensure you have the following prerequisites:

- [AWS Account](https://aws.amazon.com/)
- [AWS CLI](https://aws.amazon.com/cli/) installed and configured
- [Terraform](https://www.terraform.io/downloads.html) installed
- Basic knowledge of AWS S3 and Terraform

## Project Structure

The project consists of the following files and resources:

- `main.tf`: This Terraform configuration file defines the AWS resources, including the S3 bucket, bucket ownership controls, public access block, ACL settings, website configuration, and static website files.
- `variables.tf`: Defines input variables for the project, such as the S3 bucket name.
- `index.html`: An example HTML file representing your website's main page.
- `error.html`: An example HTML error page that users will see if there's an issue with the website.
- `assets/`: A directory containing website assets like images, stylesheets, or JavaScript files.

## Instructions

Follow these steps to deploy your static website using AWS S3 and Terraform:

1. Clone this repository to your local machine:

   ```bash
   git clone <repository-url>
   cd <repository-directory>
2. Update the variables.tf file with your desired AWS region and S3 bucket name.
3. Initialize Terraform in your project directory:

   ```bash
   terraform init
4. Deploy the infrastructure using Terraform: (This automatically accepts all the required permissions)
   
   ```bash
   terraform apply -auto-approve
5. After the Terraform deployment is complete, you'll receive the S3 bucket URL where your website is hosted. It will be displayed in the Terraform output.
6. Upload your website content to the S3 bucket using the AWS CLI or the AWS S3 web console.
7. Your static website should now be accessible via the provided S3 bucket URL.
8. To clean up and destroy the resources created by Terraform, run:

   ```bash
   terraform destroy

## Customizations
Feel free to customize the `index.html`, `error.html`, and any other website assets to match your project's requirements. You can also modify the Terraform configuration in `main.tf` to add more features or resources as needed.
