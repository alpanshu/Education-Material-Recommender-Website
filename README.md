# Educational-Website-Recommender
The website is laid upon the basic html boilerplate. In the ‘head’ section, we are including the bootstrap framework to make styling easy and add responsiveness to our website. Our website is divided into the following sections:
Navigation Bar - Located at the very top, it consists of links to navigate through the other sections and a welcome message for the current logged in user which is achieved by using a session variable to store the user data
Question Bank, Tutorials - Both of these sections use the bootstrap grid system to separate the contents. We have also used JavaScript to render tabs of various topics one at the time by manipulating the style of the question papers, videos and pdfs, mainly rendering them as active elements and checking for visibility. Each item have a form where we accept the ratings from various users that is to be used in the recommender
Recommendation Section - Our Recommender requires an input for which to suggest similar items and this is achieved through the use of a form in this section. The ‘Get Recommendation’ button takes us to another HTML page, where the results of our algorithm are rendered out for the user
The backend of the main page is built using PHP and this includes form-handling, data passing and page redirection.

# KNN RECOMMENDER
Jupyter Notebook - A popular platform which combines the utilities of Python and R to perform statistical and scientific analysis on large datasets. As a matter of fact, we have used the sklearn package in Jupyter to implement our recommendation system for the users by applying the K-Nearest Neighbors supervised learning on the data that has been acquired from our website from users and accessed using numpy and pandas

# Procedure
Keep the downloaded files in a local server like wamp or xamp to test the website
## (Note: The KNN Algorithm needs to be run after submitting the user choice to get accurate recommendation)
