<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <title>PHP Project</title>
</head>

<body class="bg-gray-300">
    <nav class="flex items-center justify-between bg-gray-800  p-2 shadow-md">
        <a href="index.php">
            <img class="h-10 rounded-full " src="./images/logo.png" alt="logo">
        </a>
        <div class="">
            <input
                class="focus:outline-none focus:ring-2 focus:ring-amber-400 p-1 w-80 text-center border-2 rounded-2xl text-amber-300"
                type="text" placeholder="Search here">
            <button class="focus:outline-none focus:ring-1 border-2 rounded-full text-amber-300"
                type="submit">🔍</button>
        </div>
        <div class=" flex gap-4">
            <a class=" border-2 rounded-3xl p-1 text-amber-300 hover:p-1 hover:text-amber-400 hover:scale-130 duration-200 w-20 text-center"
                href="login.php">Log in</a>
            <a class=" border-2 rounded-3xl p-1 text-amber-300 hover:p-1 hover:text-amber-400 hover:scale-130 duration-200 w-20 text-center"
                href="signup.php">Sign up</a>
        </div>
    </nav>
    <div class="flex h-screen">
        <div class="h-full p-5 bg-gray-700 overflow-y-auto">
            <h1 class="pb-5  font-bold">Menu</h1>
             <ul class="flex flex-col gap-8  ">
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="index.php">Home</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="portfolio.php">Portfolio</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="contact.php">Contact</a></li>
                <li><a class="text-white hover:text-black hover:border-2 hover:rounded-full hover:p-2 hover:bg-amber-400 transition-all duration-700 ease-in-out" href="blog.php">Blog</a></li>
            </ul>
        </div>
        <div class="flex-1 text-center">
            <h1>Navigating the AI Frontier: Public and Expert Opinions on Recent Developments</h1><br>

            <h2>Introduction</h2>

           <p> Artificial intelligence (AI) is reshaping industries, economies, and societies at an unprecedented pace.
            Recent developments, from regulatory delays to groundbreaking technological advancements, have sparked a
            wide range of opinions among businesses, policymakers, researchers, and the public. This article explores
            what people are thinking about key AI developments, including the EU AI Act, job displacement predictions,
            Meta’s Superintelligence Labs, Google’s Veo 3, autonomous AI agents, and the environmental costs of AI.
            These discussions touch on critical themes such as governance, socio-economic risks, autonomy, trustworthy
            media, and sustainability, reflecting the complex interplay between AI’s promise and its challenges.</p>

            <h3>1. EU AI Act: Delayed Guidance Amidst Enforcement</h3>

            <p>The European Union’s AI Act, a pioneering effort to regulate AI, has faced a significant setback with the
            delay of its Code of Practice for general-purpose AI (GPAI) until late 2025, over six months past the
            original May deadline. Despite this, the EU has confirmed that the Act’s legal schedule remains unchanged,
            with GPAI compliance starting in August 2025 and high-risk AI compliance in August 2026. This delay has
            elicited varied reactions:
            Business Concerns: Over 40 European CEOs, including those from Airbus, ASML, and Mistral, have urged a
            two-year “clock-stop” to allow more preparation time. They argue that the lack of clear guidelines and
            overlapping regulations could hinder Europe’s competitiveness in the global AI race. A tech lobbying group,
            CCIA Europe, has called for a “stop-the-clock” intervention to ensure legal certainty, citing delayed
            standards as a major issue Reuters.

            Political Perspectives: Swedish Prime Minister Ulf Kristersson has labeled the AI Act “confusing,”
            advocating for a pause to refine its implementation Riksdagen. This reflects broader political concerns
            about the Act’s complexity.

            Public and Expert Discourse: On X, users like @typewriters argue that the AI Act’s demands are subjective
            and impractical, warning that failure to address this could damage Europe’s AI ecosystem. Earlier posts from
            2024, such as one by @lugaricano, criticized the Act for limiting AI’s use in high-level problem-solving,
            potentially harming startups and productivity X Post.

            These opinions highlight a tension between regulatory ambition and industry readiness, with stakeholders
            debating whether the Act will foster responsible AI or stifle innovation.</p><br>

            <h1>2. AI and Job Displacement: A Looming Socio-Economic Challenge</h1>
            <p>CEOs from diverse sectors have raised alarms about AI’s potential to displace white-collar jobs, sparking
            widespread concern about socio-economic impacts:

            CEO Predictions:
            Dario Amodei (Anthropic) predicts that AI could eliminate half of entry-level white-collar jobs in fields
            like technology, finance, law, and consulting within one to five years, potentially spiking unemployment to
            10-20%. He advocates for public awareness, slower displacement, and policy solutions like a 3% “token tax”
            on AI revenue to redistribute wealth Axios.

            Sam Altman (OpenAI) offers a more optimistic view, comparing AI’s impact to historical technological
            advancements that ultimately created prosperity. However, he acknowledges the risk of displacement Anthropic
            Economic Advisory.

            Mark Zuckerberg (Meta) has taken a proactive stance, predicting that mid-level coders will be unnecessary by
            2025 and announcing a 5% workforce reduction at Meta, reflecting confidence in AI’s ability to replace
            certain roles.

            Public and Social Media Reactions:

            On X, posts like @ns123abc amplify Amodei’s warnings, emphasizing the “mass elimination” of jobs and raising
            public alarm X Post. Others, like @unusual_whales, cite Goldman Sachs and McKinsey estimates that 300
            million workers could be impacted by 2030, with 12 million facing complete displacement X Post.

            Some users, such as @zemotion, propose taxing AI to fund social support for displaced workers, arguing that
            without such measures, AI will primarily benefit corporations X Post.

            Research shared on X, like a working paper cited by @emollick, suggests AI creates an “inflection point” for
            jobs, initially boosting productivity (e.g., +65% earnings for web developers) before replacing workers
            (e.g., -30% for translators) X Post.

            These discussions underscore the urgent need for structural policy interventions to address work
            displacement, income inequality, and educational misalignment.</p><br>
        </div>
    </div>
</body>

</html>