# Generated by Django 2.2.5 on 2020-01-21 17:16

from django.db import migrations


class Migration(migrations.Migration):

    dependencies = [
        ('boards', '0001_initial'),
    ]

    operations = [
        migrations.RenameField(
            model_name='topic',
            old_name='stater',
            new_name='starter',
        ),
    ]