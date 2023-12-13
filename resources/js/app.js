
import 'preline'

window.onscroll = function () {
    const head = document.getElementById('header');
    const scroll = head.offsetTop;
    if (window.scrollY > scroll) {
        head.classList.add('fixed');
        head.classList.add('z-10');
    } else {
        head.classList.remove('fixed');
        head.classList.remove('z-10');
    }
}
const menu = document.querySelector('.menu');
const side = document.querySelector('.side');

menu.addEventListener('click', function () {
    side.classList.toggle('-left-2/3');
    side.classList.toggle('left-0');
    console.log('Menu clicked');
});


const item = document.querySelector('.panel');
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      this.classList.toggle('rounded-b-none');
      var panel = this.nextElementSibling;
      if (panel.style.maxHeight) {
        panel.style.maxHeight = null;
      } else {
        panel.style.maxHeight = panel.scrollHeight + "px";
      }
    });
  }


  import { Editor } from 'https://esm.sh/@tiptap/core';
  import Placeholder from 'https://esm.sh/@tiptap/extension-placeholder';
  import StarterKit from 'https://esm.sh/@tiptap/starter-kit';
  import Paragraph from 'https://esm.sh/@tiptap/extension-paragraph';
  import Bold from 'https://esm.sh/@tiptap/extension-bold';
  import Underline from 'https://esm.sh/@tiptap/extension-underline';
  import Link from 'https://esm.sh/@tiptap/extension-link';
  import BulletList from 'https://esm.sh/@tiptap/extension-bullet-list';
  import OrderedList from 'https://esm.sh/@tiptap/extension-ordered-list';
  import ListItem from 'https://esm.sh/@tiptap/extension-list-item';
  import Blockquote from 'https://esm.sh/@tiptap/extension-blockquote';

  const editor = new Editor({
    element: document.querySelector('#hs-editor-tiptap [data-hs-editor-field]'),
    extensions: [
      Placeholder.configure({
        placeholder: 'Add a message, if you\'d like.',
        emptyNodeClass: 'text-gray-600 dark:text-gray-400'
      }),
      StarterKit,
      Paragraph.configure({
        HTMLAttributes: {
          class: 'text-gray-600 dark:text-gray-400'
        }
      }),
      Bold.configure({
        HTMLAttributes: {
          class: 'font-bold'
        }
      }),
      Underline,
      Link.configure({
        HTMLAttributes: {
          class: 'inline-flex items-center gap-x-1 text-blue-600 decoration-2 hover:underline font-medium dark:text-white'
        }
      }),
      BulletList.configure({
        HTMLAttributes: {
          class: 'list-disc list-inside text-gray-800 dark:text-white'
        }
      }),
      OrderedList.configure({
        HTMLAttributes: {
          class: 'list-decimal list-inside text-gray-800 dark:text-white'
        }
      }),
      ListItem,
      Blockquote.configure({
        HTMLAttributes: {
          class: 'text-gray-800 sm:text-xl dark:text-white'
        }
      })
    ]
  });
  const actions = [
    {
      id: '#hs-editor-tiptap [data-hs-editor-bold]',
      fn: () => editor.chain().focus().toggleBold().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-italic]',
      fn: () => editor.chain().focus().toggleItalic().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-underline]',
      fn: () => editor.chain().focus().toggleUnderline().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-strike]',
      fn: () => editor.chain().focus().toggleStrike().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-link]',
      fn: () => {
        const url = window.prompt('URL');
        editor.chain().focus().extendMarkRange('link').setLink({ href: url }).run();
      }
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-ol]',
      fn: () => editor.chain().focus().toggleOrderedList().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-ul]',
      fn: () => editor.chain().focus().toggleBulletList().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-blockquote]',
      fn: () => editor.chain().focus().toggleBlockquote().run()
    },
    {
      id: '#hs-editor-tiptap [data-hs-editor-code]',
      fn: () => editor.chain().focus().toggleCode().run()
    }
  ];

  actions.forEach(({ id, fn }) => {
    const action = document.querySelector(id);

    if (action === null) return;

    action.addEventListener('click', fn);
  });