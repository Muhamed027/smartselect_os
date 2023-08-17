/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  safelist:[
    'transition-all',
    'divide-y-1',
    'border-solid',
    //blue color
    'border-blue-400',
    'text-blue-400',
    'hove:border-blue-500',
    'hove:text-blue-500',
    //pink color
    'border-pink-400',
    'text-pink-400',
    'border-pink-500',
    'text-pink-500',
    //green color
    'border-green-400',
    'text-green-400',
    'border-green-500',
    'text-green-500',
    //purple color
    'border-purple-400',
    'text-purple-400',
    'border-purple-500',
    'text-purple-500',
    //orange color
    'border-orange-400',
    'text-orange-400',
    'border-orange-500',
    'text-orange-500',
    //red color
    'border-red-400',
    'text-red-400',
    'border-red-500',
    'text-red-500',
    //yellow color
    'border-yellow-400',
    'text-yellow-400',
    'border-yellow-500',
    'text-yellow-500',
    //zinc color
    'border-zinc-400',
    'text-zinc-400',
    'border-zinc-500',
    'text-zinc-500',
    //gray color
    'border-gray-400',
    'text-gray-400',
    'border-gray-500',
    'text-gray-500',
    //stone color
    'border-stone-400',
    'text-stone-400',
    'border-stone-500',
    'text-stone-500',
    //cyan color
    'border-cyan-400',
    'text-cyan-400',
    'border-cyan-500',
    'text-cyan-500',
    //rose color
    'border-rose-400',
    'text-rose-400',
    'border-rose-500',
    'text-rose-500',
    //slate color
    'border-slate-400',
    'text-slate-400',
    'border-slate-500',
    'text-slate-500',
    //lime color
    'border-lime-400',
    'text-lime-400',
    'border-lime-500',
    'text-lime-500',
    //amber color
    'border-amber-400',
    'text-amber-400',
    'border-amber-500',
    'text-amber-500',
    //violet color
    'border-violet-400',
    'text-violet-400',
    'border-violet-500',
    'text-violet-500',
    //emerald color
    'border-emerald-400',
    'text-emerald-400',
    'border-emerald-500',
    'text-emerald-500',
    //slate color
    'border-slate-900',
    'text-slate-900',
    'border-slate-950',
    'text-slate-950',
    
    //neutral color
    'border-neutral-400',
    'text-neutral-400',
    'border-neutral-500',
    'text-neutral-500',
    //yellow color
    'border-yellow-800',
    'text-yellow-800',
    'border-yellow-800',
    'text-yellow-800',
    //green color
    'border-green-800',
    'text-green-800',
    'border-green-800',
    'text-green-800',
    //orange color
    'border-orange-800',
    'text-orange-800',
    'border-orange-800',
    'text-orange-800',
    //blue color
    'border-blue-800',
    'text-orange-800',
    'border-blue-800',
    'text-blue-800',
    

  ],
  theme: {
    extend: {
      backgroundImage: {
        'home-image': "url('images/home_background.jpg')",

      }
    },
  },
  darkMode: 'class',
  plugins: [],
}