@extends('Portal.layouts.app')

@push('title')
	<title>Wheels2Door</title>
@endpush

@section('main')
<!-- Titlebar
================================================== -->
<div id="titlebar" class="photo-bg" style="background: url(images/banner/jobbanner.jpg) no-repeat center;background-size:cover;">
	<div class="container">

		<div class="sixteen columns">
			<h2>Blog</h2>
			<span>Keep up to date with the latest news</span>
		</div>

	</div>
</div>


<!-- Content
================================================== -->
<div class="container">

	<!-- Blog Posts -->
	<div class="eleven columns">
		<div class="padding-right">
			
			@if (Request::path() == 'blog-single-post/17-job-interviews-dos-and-donts')
				<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="#"><img src="{{ asset('images/blog/blog1.jpg') }}" alt=""></a></div>
				<div class="post-content">
					<a href="#"><h3>17 Job Interview Do’s And Don’ts You Need To Know </h3></a>
					<div class="meta-tags">
						<span>September 12, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<div class="clearfix"></div>
					<div class="margin-bottom-25"></div>

					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							Being familiar with the basic interview “do’s” and “don’ts” can go a long way when it comes to your job search. But unfortunately, many of these golden rules often get ignored!.
						</blockquote>
					</div>

					<h1><strong>Interview Do’s</strong></h1>
					<p>Ready to show what you can do and leave a lasting impression during your job interview? You can’t do that by merely showing up and hoping for the best. Here are the most important job interview “do’s” to ensure that things go smoothly, and help you improve your chances of getting a job offer.</p>
					<h3><strong>Do Your Research</strong></h3>
					<p>Always show up to interviews well-prepared. You can’t expect to have a rock-solid interview if you know nothing about the company or the position. <strong>Do your research well before the interview.</strong></p>
					<p>Understanding what the company does, what it stands for, and what type of applicant the hiring manager is looking for goes a long way. It helps you determine if it’s a job you genuinely want. But more importantly, it gives you the insight to shape your answer, ask questions in return, and make it sound like you know what you’re talking about.</p>
					<h3><strong>Make a Great First Impression</strong></h3>
					<p>This interview “do” is broad and all-encompassing. The ultimate goal is to leave a lasting impression. Your interviewer will likely speak to many people during this hiring process. You want to stand out!
						There are a few ways you can do this (we’ll go over all of them in a bit).
						
						However, <strong>the best way to stand out is to be personable.</strong>
						Practice your interview questions before the big day and get comfortable speaking about yourself. Do what you can to leave the nerves at the door and focus on being confident and having a good conversation.
					</p>
					<h3><strong>Listen</strong></h3>
					<p>
						Always listen to the interviewer. Once again, that sounds simple enough. But so many people are flustered with nerves that they forget to listen actively.
					</p>
					<p>
						Unfortunately, it shows. Not listening will result in a sloppy answer that doesn’t provide the information that the interviewer is looking to get. 
						<strong> Keep your ears open and listen to every question that comes your way.</strong>
					</p>
					<h3><strong>Get The Details</strong></h3>
					<p>
						Job interviews are a fantastic opportunity to ask questions of your own. You might find it hard to get clear answers on essential job details during your research. Now is your chance to ask them!
					</p>
					<p>
						<strong>Get clarity on the little things. </strong>For example, you can ask about work culture, job advancement opportunities, and anything else you want to know more about during this conversation.
					</p>
					<p>
						Asking questions can leave a lasting impression. They show that you’re genuinely interested in the company and position. Plus, it keeps the conversation going and makes you a bit more memorable.
					</p>
					<h3><strong>Mention What Sets You Apart</strong></h3>
					<p>
						During an interview, the best thing you can do is explain what sets you apart from other candidates. That doesn’t mean you should go off on a tangent or dominate the conversation. The trick is to weave those explanations into your answers.
					</p>
					<p>
						For example, you can use your responses to talk about your strengths and how they can benefit your work in this position. Alternatively, you can utilize personality-based questions to talk about what makes you unique. Whenever possible, use STAR interview method to answer questions. 
					</p>

					<p>
						<strong>This job interview “do” is about showing that you’re the perfect candidate and a cut above the rest.</strong>
					</p>
					<h3><strong>Ask Great Questions</strong></h3>
					<p>
						Earlier, we mentioned that asking questions is a big plus. But don’t just ask generic queries. Think outside the box and ask unique interview questions the interviewer doesn’t typically hear.
					</p>
					<p>
						<strong>You can ask about work culture, the interviewer’s history with the company, or even recent events that affect the entire organization. </strong>
						Once again, it’s about building that connection and showing your genuine interest in working with the company.
					</p>
					<h3><strong>Dress Appropriately</strong></h3>
					<p>
						We’ve all heard the phrase, “Dress for success.” When you’re going in for an interview, take that old saying to heart! How you dress has more of an effect than most think. It’s the interviewer’s first impression of you, and it comes before you utter a word.
					</p>
					<p>
						There’s a delicate balance between overdressing and underdressing. You don’t want to be super casual, but you don’t want to wear a three-piece suit if the job doesn’t call for that. 
					</p>
					<p>
						One good tip is to look into company culture during your research.
						<strong>. Look for photos and consider reaching out to current employees for information about the dress code. </strong>
						Use that information as a guide, and go one step further to add a little polish to your aesthetics.
					</p>
					<h3><strong>Act Calm & Confident</strong></h3>
					<p>
						Here’s an interview “do” that’s quite challenging for many applicants. Given what’s at stake, it’s easy to let your nerves get the best of you. Interviews are a big deal and could affect your future. But do what you can to ease your nerves and act calmly.
					</p>
					<p>
						Hiring managers usually don’t want to hire someone who seems easily shaken. They want people who can go to work and get things done! 
					</p>
					<p>
						<strong>Practice your responses early and unwind a bit during your interview. </strong>
						You can be shaking in your boots internally, but don’t let that reflect in your demeanor or how you speak.
					</p>

					<h1><strong>Interview Don’ts</strong></h1>
					<p>
						Interview “do’s” are important, but you should also make sure to avoid common mistakes as well. The following job interview “don’ts” can leave your interviewer less than impressed. Committing these cardinal interview sins can hurt your chances and even kill your chance of getting hired altogether.
					</p>
					<h3><strong>Don’t Be Late</strong></h3>
					<p>
						There are few things worse than showing up to your interview late.
						<strong> Punctuality is crucial in any workplace environment. </strong>
						Showing up even a few minutes late doesn’t leave the best impression.
					</p>
					<p>
						It’s a red flag that makes interviewers wonder if you’ll be late frequently if you get the job. Plus, it makes it look like you’re not taking things seriously.
					</p>
					<p>
						Before your interview, do everything you’re supposed to like setting multiple alarms and getting plenty of rest. Additionally, consider driving to the interview location the day before. Know how to get there, look at traffic patterns, and make a game plan for parking.
					</p>
					<p>
						A number of things can go wrong on the interview day, so it’s best to plan for every worst-case scenario to ensure that things go smoothly.
					</p>
					<h3><strong>Don’t Lie</strong></h3>
					<p>
						When you’re in the moment, the urge to lie can be ever-present. What’s the worst that can happen, right?
					</p>
					<p>
						<strong>Resist that voice telling you to bend the truth! </strong>
						Hiring managers will do their due diligence before making an offer. Many will contact previous employers, and they might even ask about something you said during the interview.
					</p>
					<p>
						The truth always comes to light. Lying will get you into trouble more often than not. Not only will it ruin your chances of getting the job you’re seeking, but it can tarnish your reputation. Word gets around fast, and you might lose opportunities you never knew you had.
					</p>
					<h3><strong>Don’t Bash Your Previous Employers</strong></h3>
					<p>
						Many job-seekers go into interviews thinking it’s alright to bash former employees. But it doesn’t matter if you’re going to your old employer’s biggest rival or an entirely different industry.
						<strong> Speaking badly about your old boss or company is a big interview “don’t” that you should avoid.</strong>
					</p>
					<p>Here’s why:</p>
					<p>
						Hiring managers want to see positivity. Focusing on the negative things will only make you look down and pessimistic (which are traits that nobody wants in a coworker). But that’s not all.
					</p>
					<p>
						If you’re speaking badly about your old employer now, what will stop you from doing the same in the future? A hiring manager will think twice about negative applicants because they know that they’ll turn around and do the same thing about them if they seek employment elsewhere.
					</p>
					<p>
						Do yourself a favor and focus on positive things. You can bring up bad experiences but wisely choose your words and attitude.
					</p>
					<h3><strong>Don’t Brush Off Your Weaknesses</strong></h3>
					<p>You’re supposed to talk about your strengths during an interview. But that doesn’t mean you should brush weaknesses aside. Be upfront about them (if they come up) and address those shortcomings head-on.</p>
					<p>
						Interviewers will appreciate the honesty. 
						<strong> You can highlight how you’ve changed and what you’ve done to work on those weaknesses. </strong>
						It could be a bad experience, an old termination in your work history, a hole in your skillset, etc.
					</p>
					<p>
						Whatever the case may be, find a way to address it and put a positive spin. This is your opportunity to handle any potentially negative impacts those weaknesses might have before it becomes something that affects your chances of getting a job offer.
					</p>
					<h3><strong>Don’t Dominate the Conversation</strong></h3>
					<p>
						Interpersonal skills are a big plus for any job. But if you’re dominating the conversation and speaking over the interviewer, you’re showing that your interpersonal skills aren’t good at all.
					</p>
					<p>
						<strong>Be respectful and remember that this is a discussion. </strong>
						It’s not a speech where only you have the microphone. The interviewer needs time to respond, ask follow-up questions, and even provide comments. It’s a two-way conversation that needs to breathe.
					</p>
					<p>
						Don’t interrupt or try to be the one who gets the last say. Listen to the interview and let the conversation flow naturally.
					</p>
					<h3><strong>Don’t Let a Bad Past Interview Hinder Your Current One</strong></h3>
					<p>
						Many people have heard job interview horror stories. You might have some of your own that makes you cringe every time you think of them. However, you shouldn’t let those awful past experiences affect you now.
					</p>
					<p>
						<strong>Treat every interview as an opportunity to learn and grow. </strong>
						Harness those old failures to make positive changes for your following interview. It’s easy to get scared or become anxious about how things will
					</p>
					<p>
						However, never let them prevent you from advancing your career. Take time to reflect, figure out where things went wrong, and take steps to ensure that it never happens again.
					</p>
					<h3><strong>Don’t Inquire About Other Applicants</strong></h3>
					<p>
						You might have some interest in learning about other applicants. For example, everyone is curious about the types of people coming in for an interview. You may even want to know where you stand after meeting with the hiring manager or interviewer.
					</p>
					<p>
						Either way, don’t ask about other applicants. It comes off as tacky and somewhat needy. The interviewer is in the middle of an extensive hiring process. They’re speaking to many folks, and that process is something they will handle.
					</p>
					<p><strong>Let them do their thing and focus on your own experiences.</strong></p>
					<h3><strong>Don’t Chew Gum</strong></h3>
					<p>
						Does this interview “don’t” even need an explanation? Chewing gum is a big no-no. You can pop in some gum or a mint before you head in to get some fresh breath. But make sure you toss it out before getting to the interview desk!
					</p>
					<p>
						Chewing gum can come off as juvenile and unprofessional. No one wants to see gum bouncing around in your mouth as you speak!
					</p>
					<p>
						While we are at it, don’t bring food or water either. The interview is a business meeting. 
						<strong> Chewing food or slurping water can be distracting to the interviewer. </strong>
						If you are offered something to drink, you can accept it. 
					</p>
					<h3><strong>Don’t Be Overly Modest</strong></h3>
					<p>Finally, leave the overt modesty at the door.</p>
					<p>
						Being humble and gracious is always a plus. But this is a job opportunity, and
						<strong> you should spend time talking about what you do well. </strong>
						Interviewers want to know what you have to offer, and they like to see confidence.
					</p>
					<p>
						There’s a difference between confidence and arrogance. As long as you avoid boastful language you should be just fine. Stick to the facts.
					</p>
					<p>
						This is your time to shine and put your best foot forward. Don’t waste it trying to be super modest. You can be confident while still maintaining a sense of professionalism and respect.
					</p>
					<h1><strong>Conclusion</strong></h1>
					<p>
						Now that you’re familiar with the “do’s” and “don’ts” of interviewing, it’s time to apply these to your own job interview habits.
					</p>
					<p>
						Make improvements, prepare, don’t shoot yourself in the foot, and you’ll have a great chance of getting the job you want!
					</p>
			
				</div>
			</div>
			@endif

			@if (Request::path() == 'blog-single-post/what-sets-you-apart-from-other-candidates')
			<!-- Post -->
			<div class="post-container">
				<div class="post-img"><a href="#"><img src="{{ asset('images/blog/blog2.jpg') }}" alt=""></a></div>
				<div class="post-content">
					<a href="#"><h3>Best “What Sets You Apart From Other Candidates?” Answers </h3></a>
					<div class="meta-tags">
						<span>September 12, 2015</span>
						<span><a href="#">0 Comments</a></span>
					</div>
					<div class="clearfix"></div>
					<div class="margin-bottom-25"></div>

					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							<p>
								“What sets you apart from other candidates?” is a question that gets asked in interviews quite often. But despite this, it still trips up many applicants!
							</p>
							<p>
								This in-depth guide will teach you how to approach answering this question in a way that leaves a great impression and improves your chances of getting hired.
							</p>
						</blockquote>
					</div>

					<h1><strong>Why Interviewers Ask “What Sets You Apart From Other Candidates?”</strong></h1>
					<p>
						There are many questions you expect to hear during a job interview. Conversations about your work experience and education are pretty standard. But then, you get hit with a curveball question like “What sets you apart from other candidates?”
					</p>
					<p>
						Why is this question asked?
					</p>
					<p>
						Hiring managers love to ask seemingly unconventional questions like this. It’s a chance to get to know you on a deeper level and go beyond the confines of a staunchly professional conversation. It provides insight into your personality and lets you have more of an open-ended discussion that’s not overly rehearsed.
					</p>
					<p>
						The “what sets you apart” question seems innocent at first, but they can leave a lasting impression that ultimately makes or breaks your chances. What are interviewers trying to know by asking this question? Hearing what you think sets you apart from other candidates does a couple of different things.
					</p>
					<p>
						<strong>First, it helps them learn what you can bring to the table. </strong>
						Your resume and application painted a pretty good picture. That’s why you’ve made it to the interview phase. But now is your chance to sell yourself and talk about your unique experiences and strengths.
					</p>
					<p>
						They want you to sell yourself a little – talk about the things you’ve accomplished. It’s not about bad-mouthing other applicants. It’s about highlighting what you have to offer and relating how those achievements and skills will add value to the role and company. When you connect the dots of how your experience matches what the hiring manager is looking for, you’ll convince the hiring manager that you’re the best person for this position.
					</p>
					<p>
						<strong>Your answer is also a fantastic opportunity to show that you’re motivated and driven. </strong>
						Obviously, hiring managers want people who have that inner drive to succeed and who know what is needed to get the job done. 
					</p>
					<p>
						Your answer to “What sets you apart from other candidates?” can be a display of confidence. Your answers show the interviewer exactly what you value in yourself and how you feel about your past experiences and current capabilities.
					</p>
					<p>
						This question, among others, will also provide interviewers with information they don’t get from your resume or application. They’re looking for soft skills and strengths you might not have mentioned elsewhere. They also pay attention to how much you know about the company and the job you’re trying to get.
					</p>
					<h1><strong>How to Answer This Interview Question</strong></h1>
					<p>
						Questions like “What sets you apart from other candidates?” are multi-faceted. This one might seem like a straightforward way to list your relevant skills, but interviewers expect more than that. How you answer unveils more about you than you realize!
					</p>
					<p>
						That’s why it’s crucial to self-reflect and have a fantastic answer prepared. Not sure where to start? Use these tips to come up with the best answer possible.
					</p>
					<h3><strong>1. Research the Company</strong></h3>
					<p>
						If you don’t do any research before going into your interview, you’re already missing out. Doing your due diligence is a must regardless of what questions you expect to hear. Going into an interview without knowing a decent amount of information about the company is like going in blind.
					</p>
					<p>Don’t make that mistake!</p>
					<p>
						Performing some in-depth research goes a long way. You want to learn more about the organization and its values. Look at all the obvious sources, such as the corporate website and social media profiles. However, it’s also a good idea to think outside the box to get a clear picture of the work environment.
					</p>
					<p>
						For example, you can look at LinkedIn profiles of current employees, reviews, and more.
					</p>
					<p>
						After you do that, study the job description and posting. Understand what the company is looking for and what the organization is all about.
					</p>
					<p>
						You should also research your potential new manager and teammates to get a sense of their backgrounds and experience. Do they all come from Fortune 500 companies? Did many graduate from the same school or have similar degrees? If you don’t have the same background, be ready to present why your background would add a different viewpoint and how that would be valuable. 
					</p>
					<p>
						Research is a critical piece of the puzzle. It gives you the knowledge to talk about what sets you apart from other candidates in a way that improves your chances of getting hired. Use the information you learn to shape your response accordingly and make relevant connections to your own experiences.
					</p>
					<h3><strong>2. Compile a List of Your Unique Advantages and Strengths</strong></h3>
					<p>
						Here’s where you’ll need to do ample self-reflection. Most people don’t realize this, but applying for a new job is all about looking at your past and finding ways to connect the dots to your potential future. “What sets you apart from other applicants?” is a perfect example of that!
					</p>
					<p><strong>One of the best ways to prepare an answer is to jot down a list of your strengths and qualifications.</strong></p>
					<p>
						Think about your past successes and why you got there. Don’t add basic items that an interviewer can find on your resume. This isn’t supposed to be a list of your credentials.
					</p>
					<p>
						Focus on the strengths that are difficult to incorporate into a job application. Highlight those areas of expertise and the personal qualities that led to your successes. Don’t forget to add any significant milestone in your career or touch on accomplishments that speak to your dedication and confidence.
					</p>
					<p>
						It’s not easy making a list like this, but it goes a long way. And remember, that list stashed away. It’ll come in handy when preparing many other possible interview questions.
					</p>
					<p>
						Once you have your list ready, compare it to the information you learned about the company and organization. You don’t want to answer this question by listing every item on your list. Choose a few of the most relevant and shape your answer from there.
					</p>
					<h3><strong>3. Connect Your Background Into the Job You’re Applying For</strong></h3>
					<p>
						The entire point of an interviewer asking you “What sets you apart from other candidates?” is to give you an opportunity to explain why you’re the right person for the job. What better way to do that than to use your background as inspiration? In addition to self-reflecting and talking about your strengths, find ways to connect your personal and work history to the job at hand.
					</p>
					<p>There are many ways to do this.</p>
					<p>
						You can pull inspiration from your previous job or even go as far back as your education. Whatever you do,
						<strong> bridging your history with this open position can help you sta</strong>
					</p>
					<p>
						It gives the interviewer a glimpse of who you are. But more importantly, it provides irrefutable proof that you know your stuff and are fully capable of fulfilling the requirements of this role.
					</p>
					<p>
						It gives you the chance to show the interviewer that this is more than just a temporary gig or a job that you’ll move through on your way to something better. Show why you care about getting the job and how your background serves to help you excel in it.
					</p>
					<h3><strong>4. Provide Some Examples</strong></h3>
					<p>
						It’s one thing to say that you have a specific set of skills that set you apart. But it’s another to
						<strong> paint a detailed picture and provide real-world examples. </strong>
					</p>
					<p>
						As we said in the last tip, always relate your background experience to the job you’re trying to land. But go beyond that to provide actual examples of your strengths and qualifications in action. Think about times when you made a difference in your job.
					</p>
					<p>
						For example, maybe you used your expertise to land a lucrative client or used soft skills to keep a project moving forward when it was on the brink of falling apart. Be as specific as possible and talk in detail about that experience. 
					</p>
					<p>
						When an interviewer asks you what sets you apart from other job candidates, these are the stories they love to hear. You don’t have to be long-winded. Keep things concise. But when you talk about your past, those examples stick out in the interviewer’s mind.
					</p>
					<p>
						It’s a better way to leave an impact than simply reciting a list of traits you believe they’re looking for in an applicant. Think about what makes you unique and how your history helped you get to where you are today.
					</p>
					<h3><strong>5. Keep Your Answer Professional</strong></h3>
					<p>
						Of course, always keep your answers professional and relevant. Don’t be that candidate that’s memorable for all the wrong reasons! You’d be surprised by how often people get this question wrong because they go off on unrelated tangents or talk about things that have nothing to do with the job.
					</p>
					<p>
						While it might be exciting, your interviewer doesn’t want to hear about those oddball skills or that one time you did something remarkable to impress your friends. Don’t forget that you’re trying to get a job here!
					</p>
					<p>
						Talking about off-topic things isn’t going to do you any favors.
						<strong>. Keep your answer professional and work-related. </strong>
						Always come back to the job at hand, and don’t let your penchant for colorful conversation get in the way of sounding put-together. There’s nothing wrong with showing some personality, but you need to ensure that your answer to “What sets you apart from other applicants” adds value and relates to the position.
					</p>
					<h3><strong>6. Rehearse Before Your Interview</strong></h3>
					<p>Our final tip is to rehearse, rehearse, rehearse!</p>
					<p>
						There are many questions that you can answer on the spot. You’ve probably answered those a million times before. But this one requires some preparation if you really want to impress.
					</p>
					<p>
						You don’t want to wing it and come off sounding frazzled. A question like this can easily lead to tangents and incoherent thoughts. You want to prepare your answer early, rehearse it frequently, and have it in your mental bank of responses.
					</p>
					<p>
						Of course, you don’t want to overdo things. The last thing you want is to sound like a robot reading off a script! That would only come off as insincere.
					</p>
					<p>
						Instead,
						<strong> know the key points you want to cover and rehearse a few different ways of responding. </strong>
						Be comfortable providing your answer to impress the interviewer with how concise and prepared you are.
					</p>
					<h1><strong>What to Avoid When Answering</strong></h1>
					<p>
						Now that you know how to form your answer, let’s talk about what you shouldn’t say. Personality questions like this can be challenging. There’s a delicate balance between impressing the interviewer and saying the wrong thing that leaves a bad taste.
					</p>
					<p>Take time to form your response and avoid the following red flags.</p>
					<h3><strong>Lying</strong></h3>
					<p>
						If you’re thinking about lying, reconsider. Some applicants decide to lie during this question because they have difficulty coming up with genuine skills that set them apart. So, they create these over-flourished answers that bend the truth.
					</p>
					<p>
						That’s not the right approach. The hiring manager can always check your references and find the truth. Lying offers no favors, and it may even hurt your chances of getting hired. Who wants to hire a dishonest applicant.
					</p>
					<p>
						Instead of being untruthful, take time to develop a realistic answer. Use our tips above and dig deep. It’s not always easy, but it’s far better than lying.
					</p>
					<h3><strong>Being Negative or Sarcastic</strong></h3>
					<p>
						It’s so easy to get a little spicy when answering this question. It practically begs you to put down other potential applicants. But that’s not the point of the query.
					</p>
					<p>
						When an interviewer asks you “What sets you apart from other candidates?” they’re looking for you to highlight what you have to bring to the table. You should be able to do that without bringing others down. Ditch the negativity and leave the sarcastic tone behind.
					</p>
					<p>
						Being negative can have some ugly consequences when it comes to job interviews. It shows that you could bring that into the office, which is not something hiring managers want. This is NOT a way that you want to set yourself apart from other applicants.
					</p>
					<h3><strong>Overtly Pompous Responses</strong></h3>
					<p>
						Earlier, we mentioned that this question is an opportunity to brag about yourself a little. That’s still true, but there’s a limit.
					</p>
					<p>
						You want to pat yourself on the back and talk about your successes.
						<strong> Be proud of your history and be self-aware of your strengths. But avoid being super pompous.</strong>
					</p>
					<p>
						Overly braggy responses are a bit insufferable. Once again, there’s a fine line to walk. You should be proud, but you need to have some humility as well.
					</p>
					<h3><strong>Overly Simplified Responses</strong></h3>
					<p>
						One of the worst things you can do is simply respond with a list of traits or qualifications. One-word answers without any explanation don’t provide much insight. Interviewers can see a lot of that information on your resume.
					</p>
					<p>
						<strong>The point of this question is to open up a conversation and give the interviewer a chance to learn more about your capabilities. </strong>
						It’s about having a discussion, and simple responses cut them short.
					</p>
					<h1><strong>Sample Answers</strong></h1>
					<p>
						Like most other personality interview questions, it’s impossible to use a script. Your response will be unique to your capabilities and experiences. How someone answers it isn’t going to be the same as how you should answer it.
					</p>
					<p>
						That said, there are plenty of great answers for “What sets you apart from other candidates?” that you can use for inspiration. We have a few of the best ones to help guide you in the right direction when planning your response.
					</p>
					<h3><strong>Example 1</strong></h3>
					<p>
						In this first response, the applicant wants to highlight their relevant skills and experience. They do that by talking about their work history and providing clear examples of what they can do. It’s a powerful response because it’s detailed and nuanced while driving a particular point about their capabilities home.
					</p>
					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							<p>
								“The thing that sets me apart is that I have the relevant work experience. I’ve spent the last three years working on similar projects. I understand the complexities of your work here at [COMPANY], and I know what problems will arise and how to avoid them.
							</p>
							<p>
								Just last year, I was able to save a project that was experiencing problem after problem. I took control and worked with my teammates to put the project back on track. We ended up delivering on time and within budget.
							</p>
							<p>
								My work for that project was so successful that my previous boss asked me to create a template that eventually became a staple in my department. I’m eager to bring that expertise here and contribute to [COMPANY].”
							</p>
						</blockquote>
					</div>
					<h3><strong>Example 2</strong></h3>
					<p>
						The following example is a little more concise than the last one. It highlights how much the applicant knows about the company. They’ve connected their work experience to what the job entails, connecting the dots and illustrating why they are the best person to hire.
					</p>
					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							<p>
								Your job description mentioned that you’re looking for someone who can manage large projects while communicating with clients directly. I have experience doing just that.
							</p>
							<p>
								In my last position, I was a client-facing project manager. I was the first line of communication for large clients, but I also worked behind the scenes to ensure that the client got the product and service they needed. I believe that experience provides a unique advantage.”
							</p>
						</blockquote>
					</div>
					<h3><strong>Example 3</strong></h3>
					<p>
						With our next example, you’ll see how you can highlight a skill that you won’t necessarily see on a resume. The applicant talks about their originality and innovative thinking. They use their past experiences as proof and craft a compelling story a hiring manager won’t soon forget.
					</p>
					<div class="post-quote">
						<span class="icon"></span>
						<blockquote>
							<p>
								“One quality that I believe helps me stand out is my creativity and ability to think outside the box. I’ve always been a naturally creative thinker. During my time in school, my ideas were often utilized during group projects, and I’ve earned many accolades for developing unique ideas.
							</p>
							<p>
								I was able to land a major client in my previous position because I took a different approach than some of my other colleagues. Rather than making a standard sales pitch, I crafted it to their distinct needs. I appealed to a side of the client’s business that no other sales professional had before.
							</p>
							<p>
								I’m excited to bring my creativity to this role and come up with innovative ideas to overcome any challenge that comes my way.”
							</p>
						</blockquote>
					</div>
					<h1><strong>Conclusion</strong></h1>
					<p>
						Figuring out what sets you apart from other candidates can be a challenging process, but it’s worth it. Not only will it help you answer this interview question more effectively, but it will also give you more confidence in your abilities when you step into the room.
					</p>
					<p>
						Everyone has something that can make them stand out, so use it!
					</p>
			
					
				</div>
			</div>
		@endif

		@if (Request::path() == 'blog-single-post/answering-how-would-you-describe-yourself-in-interviews')
		<!-- Post -->
		<div class="post-container">
			<div class="post-img"><a href="#"><img src="{{ asset('images/blog/blog3.jpg') }}" alt=""></a></div>
			<div class="post-content">
				<a href="#"><h3>Answering “How Would You Describe Yourself?” In Interviews </h3></a>
				<div class="meta-tags">
					<span>September 12, 2015</span>
					<span><a href="#">0 Comments</a></span>
				</div>
				<div class="clearfix"></div>
				<div class="margin-bottom-25"></div>

				<div class="post-quote">
					<span class="icon"></span>
					<blockquote>
						<p>
							“How would you describe yourself?” is a common interview question that trips up many applicants. It seems simple at first, but it requires a lot of self-reflection to answer effectively!
						</p>
						<p>
							This guide will teach you how to describe yourself during an interview in a way that improves your chance of getting the job.
						</p>
					</blockquote>
				</div>

				<h1><strong>Why Interviewers Ask “How Would You Describe Yourself”</strong></h1>
				<p>
					There are many questions you expect to hear during an interview. However, “How would you describe yourself” is one of the most common interview questions out there! It’s a favorite for hiring managers and interviewers, regardless of the position. From interviews for back-of-house workers at a fast food place to intense meetings for managerial office jobs, it’s one of the most common questions out there.
				</p>
				<p>
					But why do interviewers ask it?
				</p>
				<p>
					<strong>Ultimately, the goal of asking you to describe yourself is to determine if you have the qualities, characteristics, and skills to do the job. </strong>
					The interviewer has a good idea of what it takes to succeed in this role. This question is a way to ensure that what you have to offer aligns with what they believe is required for success.
				</p>
				<p>
					It sounds simple enough. But this question isn’t as cut-and-dry as it seems. It’s a multi-faceted inquiry that paints a detailed picture of who you are. 
				</p>
				<p>
					Like many other personality questions, your answer to “How would you describe yourself” sheds some light on what you have to bring to the table. 
					<strong> It can show that you’re the right fit for the company culture and have what it takes to genuinely excel in this position.</strong>
				</p>
				<p>
					How you answer is important. Say the wrong thing, and you could be leaving something on the table in your interview.
				</p>
				<p>
					Many job-seekers don’t take personality questions like this seriously, but your answer is a great opportunity to improve your chances of getting a job offer.
				</p>
				<h1><strong>How to Answer This Interview Question</strong></h1>
				<p>
					Answering “How would you describe yourself?” requires some self-reflection. It’s always best to prepare early and have some answers ready.
				</p>
				<p>
					But despite how tricky it can seem to describe yourself in an interview, it’s not as difficult to answer as many assume. It’s all about understanding what the interviewer wants and knowing how to dig deep and find your qualities that closely align with what the company and role need.
				</p>
				<p>Here are some tips to help you describe yourself.</p>
				<h3><strong>1. Understand the Company</strong></h3>
				<p>
					If you haven’t researched the company, that’s the first step! Research is a fundamental part of the job-seeking process. You need to know what you’re getting into and what type of business you’ll work for.
				</p>
				<p>
					We’re not talking about only surface-level details here. Your research should include lesser-known things that you don’t see in a standard job description. It’s about understanding the company’s goals, its operation, and the work culture.
				</p>
				<p>
					Ideally, you should spend a reasonable amount of time learning as much as you can about the company before your interview. Read through the corporate website and mentions in the news. You can also turn to social media to look at how they engage with other accounts and what people are saying about them.
				</p>
				<p>
					Look at the company’s LinkedIn profiles, YouTube channels, Facebook pages, and other platforms. Don’t stop there. You can also look into current employees, CEOs and the people who work in your desired department.
				</p>
				<p>
					Your goal is to get a better understanding of the company.
					<strong> It’s a chance to put yourself in the interviewer’s shoes and figure out precisely what they’re looking for when they ask you to describe yourself.</strong>
				</p>
				<p>
					Say, for example, that the job description requests someone with an entrepreneurial spirit. Your research reveals that many of the organization’s leaders come from startups. Next, think about the qualities and traits of entrepreneurs and people who work in startups. Even if you have never worked at a startup, you still have traits that would be desirable.
				</p>
				<p>
					Once you get a better sense of the company, you can figure out ways to highlight your skills and capabilities to look attractive to the interviewer. It’s not about making things up or fudging the truth. Instead, it’s learning how to answer “How would you describe yourself?” in a way that shows you would add value to the company and helps you progress through the hiring process.
				</p>
				<h3><strong>2. Be Positive</strong></h3>
				<p>
					One of the most important things when describing yourself in an interview is to remain positive. This sounds like a no-brainer, but it’s worth mentioning.
				</p>
				<p>
					Avoid anything that sounds remotely negative. Steer clear of those descriptors that make you sound like you wouldn’t be a good fit. For example, mentioning that you’re shy, anxious, or unconfident isn’t a good idea.
				</p>
				<p>You want to impress the interviewer! Stick to positive traits that make you an attractive applicant.</p>
				<p>
					Having self-awareness is essential. But this question is asking you to highlight your positive characteristics.
				</p>
				<div class="post-quote">
					<span class="icon"></span>
					<blockquote>
						<p>
							Remember: The goal is to answer in a way that appeals to the interviewer and company. Think long and hard about your answers and how they might come off for this particular work environment. What seems like a super positive trait for you might not be the same for this interviewer.
						</p>
					</blockquote>
				</div>
				<p>
					For example, being an introvert who loves to sit quietly and work might sound like paradise from your perspective. But if the company thrives on frequent team meetings and ongoing collaboration, it might come off as you being a subpar fit for the position! Always be aware of what the company is looking for when answering this question.
				</p>
				<h3><strong>3. Give an Example</strong></h3>
				<p>
					The best way to stand out and leave a lasting impression when describing yourself in an interview is to provide a real-world example. Think about instances that highlight the skills and characteristics you mention. Then, talk about them and bring it all full circle!
				</p>
				<p>
					Providing examples is a fantastic way to give a memorable answer. Everyone can say that they’re detail-oriented or good at solving problems. But those are relatively generic answers that tons of other applicants have likely mentioned.
				</p>
				<p>
					<strong>The way you stick out in the interviewer’s mind is by telling a story that illustrates those traits in action.</strong>
				</p>
				<p>
					Let’s look at being detail-oriented. After mentioning that personality trait, you could talk about how that helped you in your current or previous job. Maybe you found an error in your old company’s software code that no one else spotted. Thanks to your eagle eye, clients experienced fewer issues.
				</p>
				<p>
					Stories like that make all the difference. It shows that you indeed have those traits. But more importantly, examples demonstrate how they benefit you at work and what they do to make you an ideal candidate.
				</p>
				<p>
					Don’t be too general. The key is to think about your past experiences and find the connections to the job you are interviewing for.
				</p>
				<h3><strong>4. Tie It In With the Role You Want</strong></h3>
				<p>
					Finally, find ways to tie your answer into the job at hand. Once again, doing your research, understanding the company, and knowing what the role entails is critical. Do all the necessary research before you come up with answers so that you’re well-equipped to respond with something relevant and impressive.
				</p>
				<p>
					A handy tip is to refer back to the job listing. There’s a good chance that the job posting included some keywords that give you some insight into what the company wants out of a new hire. The posting may even list some useful words to describe yourself (more on that later).
				</p>
				<p>
					Of course, you don’t want to recite those words verbatim. However, they can guide you in the right direction and help you create those all-important connections to your own experiences and characteristics.
				</p>
				<p>
					Think about what the job entails and find traits that match. For example, say that the listing says the job is fast-paced and complex. You could describe yourself as highly organized and capable of working under pressure.
				</p>
				<p>
					You’re not outright saying that you do well working in fast-paced jobs. But, the descriptors you do use point in that direction!
				</p>
				<h1><strong>Words to Describe Yourself In An Interview</strong></h1>
				<p>
					“How would you describe yourself? is an interview question where the words you choose matter. There are several descriptors that paint a vivid image of who you are. These words pack a powerful punch and leave a lasting impression on the hiring manager.
				</p>
				<p>
					You might see some of these words in the job description. They can sometimes come off cliche, so it’s essential to use them wisely.
				</p>
				<p>
					The best approach is to sprinkle them into your answer and use them as a jumping-off point to provide examples.
				</p>
				<h3><strong>Words to Describe How You Work</strong></h3>
				<p>
					This list is all about describing how you work. The power words are adaptable, and you can use them to talk about everything from teamwork and collaboration to how you approach challenges. 
				</p>
				<ul class="list-1">
					<li>Driven</li>
					<li>Attentive</li>
					<li>Diplomatic</li>
					<li>Dependable</li>
					<li>Visionary</li>
					<li>Observant</li>
					<li>Diligent</li>
					<li>Flexible</li>
					<li>Supportive</li>
					<li>Methodical</li>
					<li>Ethical</li>
					<li>Resourceful</li>
					<li>Leader</li>
					<li>Analytical</li>
					<li>Entrepreneurial</li>
					<li>Dedicated</li>
					<li>Disciplined</li>
					<li>Inventive</li>
					<li>Proactive</li>
					<li>Thorough</li>
					<li>Cooperative</li>
					<li>Detail-oriented</li>
					<li>Resilient</li>
					<li>Savvy</li>
					<li>Driven</li>
					<li>Diplomatic</li>
					<li>Hardworking</li>
					<li>Organized</li>
				</ul>
				<h3><strong>Power Descriptors to Talk About Your Personality</strong></h3>
				<p>
					This list of questions can also describe how you work. However, they’re more focused on your personality. The words have broad definitions, making it easy to incorporate them into your answer while connecting them to the job you are interviewing for.
				</p>
				<p>
					These words are powerful descriptors, but they are fairly general by nature. When using them, make sure to draw that connection and provide clear examples of how they translate well to your work and the position.
				</p>
				<ul class="list-1">
					<li>Creative</li>
					<li>Innovative</li>
					<li>Adventurous</li>
					<li>Curious</li>
					<li>Enthusiastic</li>
					<li>Energetic</li>
					<li>Self-aware</li>
					<li>Observant</li>
					<li>Attentive</li>
					<li>Patient</li>
					<li>Direct</li>
					<li>Tolerant</li>
					<li>Compassionate</li>
					<li>Empathetic</li>
					<li>Insightful</li>
					<li>Focused</li>
					<li>Committed</li>
					<li>Persistent</li>
					<li>Confident</li>
					<li>Extroverted</li>
					<li>Introverted</li>
					<li>Perceptive</li>
					<li>Loyal</li>
					<li>Flexible</li>
					<li>Honest</li>
					<li>Friendly</li>
					<li>Influential</li>
					<li>Adaptable</li>
					<li>Pragmatic</li>
					<li>Knowledgeable</li>
					<li>Helpful</li>
					<li>Orderly</li>
					<li>Sincere</li>
					<li>Reliable</li>
					<li>Inspirational</li>
					<li>Personable</li>
					<li>Amiable</li>
				</ul>
				<h1><strong>What to Avoid When Answering</strong></h1>
				<p>
					If you’re describing yourself in a job interview, there are a number of things you should avoid saying as well! Use these recommendations to help you structure your answer when you’re practicing.
				</p>
				<h3><strong>Don’t Be Long-Winded</strong></h3>
				<p>
					We’ve all been there. You hear a question you aren’t prepared for, so you end up rambling until you find something that sticks. It’s a job seeker’s worst fear for interviews, but it’s an everyday reality.
				</p>
				<p>
					Don’t let yourself ramble on for too long when describing yourself.
					<strong> The ideal response length is around 60 to 90 seconds. </strong>
					All you have to do is mention a few traits, provide examples, and tie them back to the job.
				</p>
				<p>
					Here’s where preparing early comes in handy. Have a few responses ready so that you’re concise and read to respond.
				</p>
				<p>
					If you ramble, you’re doing more harm than good. Incoherent answers show that you’re easily side-tracked, which is never good. Keep your response clear and to the point.
				</p>
				<h3><strong>Don’t Be Too Brief</strong></h3>
				<p>
					While rambling is terrible, so is providing simple one-word answers. Please don’t respond with a list of traits and leave it at that. Your interviewer expects more, and cutting the answer short will leave them staring back at you blank and bewildered!
				</p>
				<p>
					Expand on your answers. Remember that providing a real-world example makes a significant difference. Use a specific story to back up those descriptors you provide.
				</p>
				<h3><strong>Don’t Lie</strong></h3>
				<p>
					<strong>Don’t try to pretend you are someone you’re not or to fit the role. </strong>
					Lying is the worst thing you can do! That doesn’t just apply to this question. Lying at any point in your interview isn’t a good idea.
				</p>
				<p>
					Hiring managers will do their due diligence. They’ll call previous employers and references. If you provide this grand story about how you’re an amazing problem-solver when the truth is the opposite, they’ll find out.
				</p>
				<p>
					Plus, once you get into the role, you want to be successful. Not being truthful about who you are can set you up for an uncomfortable situation in your new job. It’s best to be truthful for a win-win.
				</p>
				<h3><strong>Don’t Dominate the Conversation</strong></h3>
				<p>
					It’s easy to monopolize a conversation when answering questions like “How would you describe yourself?” But remember, you’re doing a job interview, and there’s supposed to be some back-and-forth.
				</p>
				<p>
					Interviewers often have follow-up questions they want you to answer. Steamrolling your response as if you’ve rehearsed it a million times doesn’t leave room for the interviewer to ask additional questions.
				</p>
				<p><strong>Let your answer breathe and provide plenty of opportunities for that critical back-and-forth experience.</strong></p>
				<h1><strong>Example Answers</strong></h1>
				<p>
					Your answer to this question will depend on your personality and work experience. There’s no right or wrong answer, but you can approach your answer in a suboptimal way!
				</p>
				<p>
					To help guide you in the right direction, we have a few examples of high-quality answers to “How to describe yourself?” that are sure to impress. 
				</p>
				<h3><strong>Example 1</strong></h3>
				<p>
					In this first example, the trait the applicant is highlighting is customer service. Good customer service is critical to many jobs. Instead of outright saying that they excel at customer service, this example applicant focuses on the fact that they are a “people person.”
				</p>
				<div class="post-quote">
					<span class="icon"></span>
					<blockquote>
						<p>
							“Most would describe me as a people-person. I enjoy meeting others and have no problem forming connections. Learning about someone’s background and finding common ground is something I do well.
						</p>
						<p>
							This trait is useful when working with clients and starting new projects. At my previous job, my client customer satisfaction scores were roughly 20 percent higher than the company average. I did all I could to make new clients feel comfortable through regular communication.”
						</p>
					</blockquote>
				</div>
				<h3><strong>Example 2</strong></h3>
				<p>
					In this next example, leadership is the skill that the applicant wants to highlight when describing themselves. Once again, leadership is one of those universal traits that most employers love to see. However, it can be tricky to talk about without sounding cliche. Here’s an example of how to talk about it the correct way.
				</p>
				<div class="post-quote">
					<span class="icon"></span>
					<blockquote>
						<p>
							“My previous work colleagues would call me a leader. I slip into leadership roles naturally in a group setting. For many of the collaborative projects I completed at my former job, I took the helm and became the go-to person for questions and concerns. That eventually led to a promotion into a leadership role less than a year after joining the company.
						</p>
						<p>
							I enjoy those responsibilities and believe that my communication skills play a big part in how I guide my teams in the right direction. I enjoy lifting my colleagues and finding ways to encourage them to harness their skills for every project.”
						</p>
					</blockquote>
				</div>
				<h3><strong>Example 3</strong></h3>
				<p>
					This final example is all about showing one’s creative and innovative thinking. The applicant talks about how they think outside of the box, providing examples that are sure to excite an interviewer.
				</p>
				<div class="post-quote">
					<span class="icon"></span>
					<blockquote>
						<p>
							“The thing that I pride myself on most is my creativity. I like to think outside the box and find unique solutions to workplace challenges. I firmly believe that going against the norm can lead to amazing results.
						</p>
						<p>
							In my previous jobs, I often took a more unorthodox approach than most would expect. For example, I worked with a client to do a risky social media campaign different from their standard marketing techniques. The risk paid off, and the campaign led to a significant boost in profits for that particular product launch.”
						</p>
					</blockquote>
				</div>
				<h1><strong>Conclusion</strong></h1>
				<p>
					Being able to answer “How would you describe yourself?” during a job interview requires a mix of preparation and self-reflection. While it might seem challenging at first, it won’t take long before you get the hang of it!
				</p>
				<p>Follow our recommendations above, practice a few times, and you’ll shine during the interview.</p>

				
			</div>
		</div>
	@endif

			{{-- <!-- Comments -->
			<section class="comments">
			<h4>Comments <span class="comments-amount">(4)</span></h4>

				<ul>
					<li>
						<div class="avatar"><img src="{{ url('http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70') }}" alt="" /></div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by">Kathy Brown<span class="date">12th, June 2015</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Morbi velit eros, sagittis in facilisis non, rhoncus et erat. Nam posuere tristique sem, eu ultricies tortor imperdiet vitae. Curabitur lacinia neque non metus</p>
						</div>
					</li>

					<li>
						<div class="avatar"><img src="{{ url('http://www.gravatar.com/avatar/00000000000000000000000000000000?d=mm&amp;s=70') }}" alt="" /> </div>
						<div class="comment-content"><div class="arrow-comment"></div>
							<div class="comment-by">John Doe<span class="date">15th, May 2015</span>
								<a href="#" class="reply"><i class="fa fa-reply"></i> Reply</a>
							</div>
							<p>Commodo est luctus eget. Proin in nunc laoreet justo volutpat blandit enim. Sem felis, ullamcorper vel aliquam non, varius eget justo. Duis quis nunc tellus sollicitudin mauris.</p>
						</div>

					</li>
				 </ul>
			</section>


			<div class="clearfix"></div>
			<div class="margin-top-35"></div>


			<!-- Add Comment -->
			<h4 class="comment">Add Comment</h4>
			<div class="margin-top-20"></div>
			
			<!-- Add Comment Form -->
			<form id="add-comment" class="add-comment">
				<fieldset>

					<div>
						<label>Name:</label>
						<input type="text" value=""/>
					</div>
						
					<div>
						<label>Email: <span>*</span></label>
						<input type="text" value=""/>
					</div>

					<div>
						<label>Comment: <span>*</span></label>
						<textarea cols="40" rows="3"></textarea>
					</div>

				</fieldset>

				<a href="#" class="button color">Add Comment</a>
				<div class="clearfix"></div>
				<div class="margin-bottom-20"></div>

			</form> --}}

		</div>
	</div>
	<!-- Blog Posts / End -->


	<!-- Widgets -->
	<div class="five columns blog">

		<!-- Search -->
		<div class="widget">
			<h4>Search</h4>
			<div class="widget-box search">
				<div class="input"><input class="search-field" type="text" placeholder="To search type and hit enter" value=""/></div>
			</div>
		</div>

		<div class="widget">
			<h4>Got any questions?</h4>
			<div class="widget-box">
				<p>If you are having any questions, please feel free to ask.</p>
				<a href="contact" class="button widget-btn"><i class="fa fa-envelope"></i> Drop Us a Line</a>
			</div>
		</div>

		<!-- Tabs -->
		<div class="widget">

			<ul class="tabs-nav blog">
				<li class="active"><a href="#tab1">Popular</a></li>
				<li><a href="#tab2">Featured</a></li>
				<li><a href="#tab3">Recent</a></li>
			</ul>

			<!-- Tabs Content -->
			<div class="tabs-container">

				<div class="tab-content" id="tab1">
					
					<!-- Recent Posts -->
					<ul class="widget-tabs">
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">17 Job Interview Do’s And Don’ts You Need To Know</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Best “What Sets You Apart From Other Candidates?” Answers</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Answering “How Would You Describe Yourself?” In Interviews</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
					</ul>
		
				</div>

				<div class="tab-content" id="tab2">
				
					<!-- Featured Posts -->
					<ul class="widget-tabs">

						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Answering “How Would You Describe Yourself?” In Interviews</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">17 Job Interview Do’s And Don’ts You Need To Know</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Best “What Sets You Apart From Other Candidates?” Answers</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>
						
					</ul>
				</div>

				<div class="tab-content" id="tab3">
				
					<!-- Recent Posts -->
					<ul class="widget-tabs">

						<!-- Post #2 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}"><img src="{{ asset('images/blog/blog2.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/what-sets-you-apart-from-other-candidates') }}">Best “What Sets You Apart From Other Candidates?” Answers</a></h5>
								<span>October 10, 2015</span>
							</div>
							<div class="clearfix"></div>

						</li>

						<!-- Post #3 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}"><img src="{{ asset('images/blog/blog3.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/answering-how-would-you-describe-yourself-in-interviews') }}">Answering “How Would You Describe Yourself?” In Interviews</a></h5>
								<span>August 27, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>
						
						<!-- Post #1 -->
						<li>
							<div class="widget-thumb">
								<a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}"><img src="{{ asset('images/blog/blog1.jpg') }}" alt="" /></a>
							</div>
							
							<div class="widget-text">
								<h5><a href="{{ url('blog-single-post/17-job-interviews-dos-and-donts') }}">17 Job Interview Do’s And Don’ts You Need To Know</a></h5>
								<span>September 12, 2015</span>
							</div>
							<div class="clearfix"></div>
						</li>

					</ul>
				</div>
				
			</div>
		</div>



		<div class="widget">
			<h4>Social</h4>
				<ul class="social-icons">
					<li><a class="facebook" href="#"><i class="icon-facebook"></i></a></li>
					<li><a class="twitter" href="#"><i class="icon-twitter"></i></a></li>
					<li><a class="gplus" href="#"><i class="icon-gplus"></i></a></li>
					<li><a class="linkedin" href="#"><i class="icon-linkedin"></i></a></li>
				</ul>
		</div>
		
		<div class="clearfix"></div>
		<div class="margin-bottom-40"></div>

	</div>
	<!-- Widgets / End -->


</div>
@endsection